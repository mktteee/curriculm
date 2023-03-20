<?php

// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');

$userError = '';
$passError = '';
$okMessage = '';
$db_error = '';
// POSTで送られていれば処理実行
if (isset($_POST["signUp"])) {
    if (empty($_POST['username'])) {
        $userError = 'ユーザー名が未入力です。';
    }
    if (empty($_POST['password'])) {
        $passError = 'パスワードが未入力です。';
    }
// nameとpassword両方送られてきたら処理実行
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username'],ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'],ENT_QUOTES);
// PDOのインスタンスを取得FILL_IN
        $pdo = db_connect();
try {
// SQL文の準備 FILL_IN 
    $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
    
// パスワードをハッシュ化
    $password_hash = password_hash($password,PASSWORD_DEFAULT);
// プリペアドステートメントの作成 FILL_IN 
    $stmt = $pdo->prepare($sql);
// 値をセット FILL_IN
    $stmt->bindParam(':name',$username);
    $stmt->bindParam(':password',$password_hash);
// 実行 FILL_IN
    $stmt->execute();
// 登録完了メッセージ出力
    $okMessage = 'ユーザーの登録が完了しました。';
}catch (PDOException $e) {
// エラーメッセージの出力 FILL_IN 
    $db_error = 'データベースエラー';
// 終了 FILL_IN
}
    }
}
?>

 


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <font color="#0094c8"><?php echo htmlspecialchars($okMessage, ENT_QUOTES); ?></font><br>
    <font color="red"><?php echo htmlspecialchars($userError, ENT_QUOTES); ?></font><br>
    <font color="red"><?php echo htmlspecialchars($passError, ENT_QUOTES); ?></font><br>
    <font color="red"><?php echo htmlspecialchars($db_error, ENT_QUOTES); ?></font><br>

<h1>新規登録</h1>
<form method="POST" action="signUp.php">
user:<br>
<input type="text" name="username" id="username">
<br>
password:<br>
<input type="password" name="password" id="password"><br>
<input type="submit" value="submit" id="signUp" name="signUp">

</form>
</body>
</html>