<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./logout.css">
    <title>ログアウト</title>
</head>
<body>
    <h2>ログアウト画面</h2>
    <div class="logout">ログアウトしました</div>
    <input class="button" type="button" onclick="location.href='login.php'" value="ログイン画面"><br>
</body>
</html>