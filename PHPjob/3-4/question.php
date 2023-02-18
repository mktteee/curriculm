<div class ="all">
<?php
$my_name = $_POST['my_name'];

$select1 = [80,22,20,21];
$select2 = ["PHP","Python","JAVA","HTML"];
$select3 = ["join","select","insert","update"];

$answer1 = $select1[0];
$answer2 = $select2[3];
$answer3 = $select3[1];
?>
<link rel="stylesheet" href="style.css">
<body>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>

<h2>①ネットワークのポート番号は何番？</h2>
<form action="answer.php" method="post">
<?php foreach ($select1 as $value1) { ?>
    <input type="radio" name=/>
    <?php echo $value1;
    } ?>

<h2>②Webページを作成するための言語は？</h2>

<?php foreach ($select2 as $value2) { ?>
    <input type="radio"/>
    <?php echo $value2;
    } ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>

<?php foreach ($select3 as $value3) { ?>
    <input type="radio"/>
    <?php echo $value3;
    } ?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

    $my_name ='my_name'
    $answer1 ='answer1'
    $answer2 ='answer2'
    $answer3 ='answer3'

   
</form>
</body>
</div>