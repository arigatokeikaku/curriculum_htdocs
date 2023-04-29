<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// セッション開始
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// URLの?以降で渡されるIDをキャッチ

$id = $_GET["id"];

redirect_main_unless_parameter($id);


// 関数db_connect()からPDOを取得する
$pdo = db_connect();

try {
    // 実行したいSQL文を準備
    $sql = "DELETE FROM books WHERE id = $id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
