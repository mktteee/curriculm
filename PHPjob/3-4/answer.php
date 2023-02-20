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
function chkAnswer($answer,$value) {
    if($answer == $value) {
        return "正解！";
    } else {
        return "残念・・・";
    }
}
$result1 = chkAnswer($answer1, $value1); 
$result2 = chkAnswer($answer2, $value2);
$result3 = chkAnswer($answer3, $value3);
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