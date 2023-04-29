<?php
// セッション開始
require_once('function.php');
check_user_logged_in();

// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 実行したいSQL文を準備
$sql = "SELECT * FROM books ORDER BY id DESC";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

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
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>在庫一覧画面</title>
    <link rel="stylesheet" href="style_main.css">
    <!-- <link rel="stylesheet" href="reset.css"> -->

</head>

<body>
    <div class="container">
        <h1>在庫一覧画面</h1>

        <button class="register btn" onclick="location.href='register.php'">新規登録</button>
        <button class="logout btn" onclick="location.href='logout.php'">ログアウト</button>



        <table>
            <tr>
                <th>タイトル</th>
                <th>発売日</th>
                <th>在庫数</th>
                <th></th>
            </tr>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><a class="delete btn" href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>
</body>

</html>