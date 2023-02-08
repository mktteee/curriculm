<?php

$tanka = ["りんご" => 100, "みかん" => 30, "もも" => 300];
$kosuu = [3,5,10];

function getgoukei($tanka, $kosuu) {
    $goukei = $tanka * $kosuu;
    
    $fruits = ["りんご", "みかん", "もも"]; 
    foreach($fruits as $fruit) 
        echo $fruit."は".$goukei."円です。";
       
       echo '<br>';
    
}
getgoukei(100,3);
getgoukei(30,5);
getgoukei(300,10); 



?>