<link rel="stylesheet" href="style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成

$your_name = filter_input(INPUT_POST,"your_name");


// if(isset($_POST['your_name'])){
// 	$your_name = $_POST['your_name'];
// }



//①画像を参考に問題文の選択肢の配列を作成してください。

$que = ["①ネットワークポートの番号は何番？","②Webページを作成するための言語は？","MySQLで情報を取得するためのコマンドは？"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください

$answer_option1 = ["80","22","20","21"];
$answer_option2 = ["PHP","Python","JAVA","HTML"];
$answer_option3 = ["join","select","insert","update"];


?>

<form action="answer.php" method="POST">
<p>お疲れ様です<!--POST通信で送られてきた名前を出力-->
<?php echo $your_name;?>

さん</p>
<input type="hidden" name="your_name" value="<?php echo $your_name ?>" />


<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($answer_option1 as $value) {
    // $selected_answer1 .=  '<input type="radio" name="your_answer1" value="'.$value.'">'.$value;
    echo  '<input type="radio" name="your_answer1" value="'.$value.'">'.$value;

}?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($answer_option2 as $value) {
    echo  '<input type="radio" name="your_answer2" value="'.$value.'">'.$value;
}?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($answer_option3 as $value) {
    echo  '<input type="radio" name="your_answer3" value="'.$value.'">'.$value;
}?>

<br>

<!-- $form = '<form action="answer.php" method="POST"> -->

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="submit" value="回答する">

</form>