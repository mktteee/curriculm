<?php
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($colors);
echo '<br>';
$colors["yellow"] = "黄色";
var_dump($colors);
echo '<br>';

$fruits = ["apple" => "appleといったらりんご", "orange" => "orangeといったらみかん", "peach" => "peachといったらもも"];
foreach($fruits as $key => $value) {
    echo $value;
    echo '<br>';
}
echo '<br>';

function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。"; 
}
// 1)
getTriangleArea(10,5);
// 2)
getTriangleArea(15,8);
// 3)
getTriangleArea(8,6);
echo '<br>';

$myname = "ruby";

function sayHi($name = "goto") {
    // 関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}

echo sayHi();
echo $myname;
echo '<br>';

echo '<br>';

function getBoxVolume($tate, $yoko, $takasa) {
    $box = $tate * $yoko * $takasa;
    print "直方体の体積は".$box."だよ。";
}
getBoxVolume(5,10,8);

$fruits = ["りんご", "みかん", "もも"];

foreach ($fruits as $value) {
    echo $value;
}
?>