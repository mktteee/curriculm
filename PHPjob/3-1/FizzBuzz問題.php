<?php
$n = 1;
for ($n = 1; $n <= 100; $n++) {
    
    
    if ($n %3 === 0 && $n %5 === 0) {
        echo 'FizzBuzz!';
        echo '<br>';
    }elseif ($n %5 === 0) {
        echo 'Buzz!';
        echo '<br>';
    }elseif ($n %3 === 0) {
        echo 'Fizz!';
        echo '<br>';
    }else{
        echo $n;
        echo '<br>';
    }
}