<?php
$num = 1;
while($num < 100) {
    echo $num;
    echo '<br>';
    if($num == $num *= 3){
        echo 'Fizz!';
    }
}