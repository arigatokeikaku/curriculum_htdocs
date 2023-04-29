<?php
// セッション開始
require_once('function.php');
check_user_logged_in();

// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');


$id = $_GET['id'];

redirect_main_unless_parameter($id);

$row = find_post_by_id($id);
// 関数から取得した値を格納
$id = $row['id'];
$title = $row['title'];
$content = $row['content'];

$pdo_comments = db_connect();

try {
    $sql_comments = "SELECT * FROM comments WHERE post_id = :post_id";

    $stmt_comments = $pdo_comments->prepare($sql_comments);
    $stmt_comments->bindParam(':post_id', $id);
    $stmt_comments->execute();

    // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // 読み込むものがなくなったらループ終了
    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo $row['id'] . '、' . $row['title'] . '、' . $row['content'];
    //     echo '<br />';
    // }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>記事詳細</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <table>
        <tr>
            <td>ID</td>
            <td><?php echo $id; ?></td>
        </tr>
        <tr>
            <td>タイトル</td>
            <td><?php echo $title; ?></td>
        </tr>
        <tr>
            <td>本文</td>
            <td><?php echo $content; ?></td>
        </tr>
    </table>
    <a href="create_comment.php?post_id=<?php echo $id ?>">この記事にコメントする</a><br />
    <a href="main.php">メインページに戻る</a>

    <?php


    // 結果が1行取得できたら
    while ($row = $stmt_comments->fetch(PDO::FETCH_ASSOC)) {
        echo '<hr>';
        echo $row['name'];
        echo '<br />';
        echo $row['content'];
    }
    ?>



</body>

</html>