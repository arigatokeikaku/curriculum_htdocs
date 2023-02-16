<?php
$my_name = $_POST['my_name'];
$e_mail = $_POST['e-mail'];
$password = $_POST['password'];
var_dump($_POST);


// $my_name = $_GET['my_name'];
// $password = $_GET['password'];
// var_dump($_GET);

?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のメールアドレスは、<?php echo $e_mail; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>