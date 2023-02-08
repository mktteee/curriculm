<?php
$message = "Hello World!";
echo $message;
echo '<br>';

define("ADMIN_EMAIL", "y-i-group@gmail.com");
define("LIST_COUNT", 15);
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;
echo '<br>';

echo 1 + 1;
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2*2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 10 % 3;
echo '<br>';

$x = 0;
$x *= 5;
echo $x;
echo '<br>';

$x++;
echo $x;
echo '<br>';

$x += 5;
echo $x;
echo '<br>';


$age = 18;
if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は20歳になってから！";
}
echo '<br>';

$name = "";
echo ($name != "")?'名前を受け付けました':'名前を記入してください';
echo '<br>';

$name = 'taro';
$password = 'pass';
if ($name === 'taro' && $password === 'pass') {
    echo 'ログイン成功です。';
} elseif ($name === 'taro') {
    echo 'パスワードが間違っています。';
} elseif ($password === 'pass') {
    echo '名前が間違っています。';
} else {
    echo '入力情報が間違っています。';
}
echo '<br>';

$num = 0;
while ($num < 10) {
    echo $num;
    $num++;
    if($num == 5) {
        break;
    }
}
echo '<br>';

$num = 0;
do {
    echo $num;
    $num++;
} while($num < 10);
echo '<br>';

for($i=0;$i<100;$i++) {
    echo $i;
    echo '<br>';
}
echo '<br>';

$num = 0;
while ($num < 100) {
    echo $num;
    echo '<br>';
    $num++;
    echo '<br>';
    

}



?>
