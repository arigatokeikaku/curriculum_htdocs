<?php

if (!empty($_POST)) {

    if (empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    // パスワードが入力されていない場合の処理
    if (empty($_POST["password"])) {
        echo "パスワードが未入力です。";
    }



    if (!empty($_POST["name"]) && !empty($_POST["password"])) {

        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $submit = $_POST['signUp'];
        //var_dump($_POST);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);


        if (isset($_POST["signUp"])) {


            require_once('db_connect.php');

            // 実行したいSQL文を準備
            // 今回はusersテーブルにレコードを追加
            $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
            // 関数db_connect()からPDOを取得する
            $pdo = db_connect();
            try {
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->bindValue(':password', $password_hash);
                $stmt->execute();
                // echo 'インサートしました。';
                header("Location: index.php");
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
                die();
            }
        }
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style_float.css">

</head>

<body>
    <h1 class="minus">ユーザー登録画面</h1>
    <form class="clear" method="POST" action="">
        <br>
        <input type="text" placeholder="  ユーザー名" name="name" id="name">
        <br>
        <input type="password" placeholder="  パスワード" name="password" id="password"><br>
        <input type="submit" value="新規登録" id="signUp" name="signUp">
    </form>
</body>

</html>