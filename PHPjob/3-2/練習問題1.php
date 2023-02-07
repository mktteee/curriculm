<?php

$apples = ["りんご",100];
$oranges = ["みかん",30];
$peachs = ["もも",300];


function getgoukei($tanka, $kosuu) {
    $goukei = $tanka * $kosuu;
    
    

    $fruits = [ ["りんご", 100], ["みかん", 30], ["もも",300] ];
    echo $fruits[0][0]."は".$goukei."円です。";
    echo $fruits[1][0]."は".$goukei."円です。";
    echo $fruits[2][0]."は".$goukei."円です。";
}
getgoukei(100,3);
getgoukei(30,5);
getgoukei(300,10);
echo '<br>';

?>