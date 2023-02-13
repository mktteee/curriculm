<?php
   $x = 3.14;
   echo ceil($x);
   echo '<br>';

   echo floor($x);
   echo '<br>';

   echo round($x);
   echo '<br>';

   
   echo pi();
   echo '<br>';
   function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
   }
   circleArea(4);
   echo '<br>';

   echo mt_rand(1,10);
   echo '<br>';

   $str = "pikachu";
   echo strlen($str);
   echo '<br>';

   echo strpos($str, "a");
   echo '<br>';

   echo substr($str,-2,2);
   echo '<br>';

   echo str_replace("p","P",$str);
   echo '<br>';

   $strspace = "pikachu kougeki";
   echo str_replace(" ","",$str);
   echo '<br>';

   $hiragana = "ピカチュウ";
   echo mb_strlen($hiragana);
   echo '<br>';

   $name = "ピカチュウ";
   $volt = 10;
   printf("%s、%d万ボルト！", $name, $volt);
   echo '<br>';

   $kougeki = sprintf("%s、%d万ボルト！",$name, $volt);
   echo $kougeki;
   echo '<br>';

$rangers = ["red", "blue", "yellow", "pink", "black"];
echo count($rangers);
echo '<br>';

sort($rangers);
var_dump($rangers);
echo '<br>';

$numbers = [17, 7, 13, 19, 3];
sort($numbers);
var_dump($numbers);
echo '<br>';

var_dump(in_array("red", $rangers));
echo '<br>';

if (in_array("red", $rangers)) {
   echo "レッドはいるよ！";
}else{
   echo "レッドはいないよ！";
}
echo '<br>';

$atstr = implode(",", $rangers);
var_dump($atstr);
echo '<br>';

$re_rangers = explode(",", $atstr);
var_dump($re_rangers);
echo '<br>';

$str = "1,2,3,4,お";
$array = explode(",",$str);
var_dump($array);
echo '<br>';

echo time();
echo '<br>';
var_dump(time());
echo '<br>';

echo date("Y-m-d H:i:s", time());
echo '<br>';