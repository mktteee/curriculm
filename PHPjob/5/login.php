<?php
// DBの接続情報を記述したファイルを読み込む
require_once('db_connect.php');
// 関数をまとめたファイルを読み込む
require_once('function.php');

session_start();

if (!empty($_POST["login"])) {
    
    if (empty($_POST["username"])) {
        echo "ユーザー名が未入力です。";
    }
    if (empty($_POST["password"])) {
        echo "パスワードが未入力です。";
    }

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $name = htmlspecialchars($_POST["username"],ENT_QUOTES);
        $pass = htmlspecialchars($_POST["password"],ENT_QUOTES);

        $pdo = db_connect();

        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($pass, $row["password"])) {
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["name"];

                header("Location: main.php");
                exit;
            } else {
                echo "ユーザー名またはパスワードに誤りがあります。";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>ログイン画面</title>
</head>
<body>
    <div>
        <h2>ログイン画面</h2>
        <button class="btn" onclick="location.href='register.php'">新規ユーザー登録</button>
    </div>
    <form action="" method="post"><br>
        <input class="placeholder" placeholder="ユーザー名" type="text" name="username" id="username" style="height: 30px;"><br>
        <input class="placeholder" placeholder="パスワード" type="password" name="password" id="password" style="height: 30px; margin-top: 15px;"><br>
        <input class="button" type="submit" name="login" value="ログイン"><br>
    </form>
</body>
</html>