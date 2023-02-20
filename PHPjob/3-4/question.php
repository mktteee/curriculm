<link rel="stylesheet" href="style.css">
<?php

$my_name = $_POST['my_name'];

$select1 = [80,22,20,21];
$select2 = ["PHP","Python","JAVA","HTML"];
$select3 = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $select1[0];
$answer2 = $select2[3];
$answer3 = $select3[1];
?>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($select1 as $value1) { ?>
    <input type="radio" name="value1" value="<?php echo $value1 ?>"/>
    <?php echo $value1;
    } ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($select2 as $value2) { ?>
    <input type="radio" name="value2" value="<?php echo $value2 ?>"/>
    <?php echo $value2;
    } ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($select3 as $value3) { ?>
    <input type="radio" name="value3" value="<?php echo $value3 ?>"/>
    <?php echo $value3;
    } ?>
<br>
<input type="submit" value="回答"/>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="my_name" value="<?php echo $my_name;?>"/>
<input type="hidden" name='answer1' value="<?php echo $answer1;?>"/>
<input type="hidden" name='answer2' value="<?php echo $answer2;?>"/>
<input type="hidden" name='answer3' value="<?php echo $answer3;?>"/>
</form>
