<link rel="stylesheet" href="style.css">
<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$your_name = filter_input(INPUT_POST, "your_name");
$your_answer1 = filter_input(INPUT_POST, "your_answer1");
$your_answer2 = filter_input(INPUT_POST, "your_answer2");
$your_answer3 = filter_input(INPUT_POST, "your_answer3");


$answers = array(1 => 80, 2 => "HTML", 3 => "select");

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function getSeigo($your_answer, $answer)
{

    //    your_answer = your_answer;

    if ($your_answer == $answer) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}

?>
<p><!--POST通信で送られてきた名前を表示-->
    <?php echo $your_name; ?>
    さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php   getSeigo($your_answer1, $answers[1]); ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo  getSeigo($your_answer2, $answers[2]); ?>


<p>③の答え</p>
<!-- 作成した関数を呼び出して結果を表示 -->

<?php echo  getSeigo($your_answer3, $answers[3]); ?>


