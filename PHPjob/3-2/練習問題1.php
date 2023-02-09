<?php

$fruits = ["りんご" => 100, "みかん" => 30, "もも" => 300];
$kosuu = [3,5,10];

function getgoukei($tanka, $kosu) {
    $goukei = $tanka * $kosu;
    return $goukei;
}    

$i = 0;
foreach ($fruits as $key => $value) {
    echo $key . "は" . getgoukei($value,$kosuu[$i]) . "円です。";
    echo "<br>";

    $i++;
    }

?>