<?php

$tanka = ["りんご" => 100, "みかん" => 30, "もも" => 300];
$kosuu = [3,5,10];

function getgoukei($tanka, $kosuu) {
    $goukei = $tanka * $kosuu;
    return $goukei;
}    

    foreach($tanka as $fruit) 
        echo $fruit."は".$goukei."円です。";
        echo '<br>';


$i = 0;
foreach ($fruit as $key => $value) {
    echo $key . "は" . getgoukei($value,$???[$i]) . "円です。";
    echo "<br>";

    $i++;
    }



?>