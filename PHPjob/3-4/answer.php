<link rel="stylesheet" href="style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$value3 = $_POST['value3'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$result1= ($answer1 == $value1)?'正解！':'残念・・・';
$result2= ($answer2 == $value2)?'正解！':'残念・・・';
$result3= ($answer3 == $value3)?'正解！':'残念・・・';
?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result1; ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result2; ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result3; ?>