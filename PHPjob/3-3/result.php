<?php
$number = $_POST['number'];
$num_arr = str_split($number);
$num_key = array_rand($num_arr, 1);
$result = $num_arr[$num_key];
?>

<P><?php echo date("Y/m/d", time()); ?>の運勢は</p>

<p>選ばれた数字は <?php echo $result; ?></p>

<?php 

if($result == 0) {
    echo "凶";
} elseif($result >=1 && $result <=3) {
    echo "小吉";
} elseif($result >=4 && $result <=6) {
    echo "中吉";
} elseif($result == 7 | $result == 8) {
    echo "吉";
} else {
    echo "大吉";
}

?>

