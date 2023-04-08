<?php
// 作成したdb_connect.phpを読み込む
require_once('pdo.php');
require_once('getData.php');

// 実行したいSQL文を準備
$sql = "SELECT * FROM posts  ORDER BY id desc";
$sql2 = "SELECT * FROM users";

// 関数db_connect()からPDOを取得する
$pdo = db_connect();


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">

</head>

<body>
    <div class="container">

        <div class="logo">
            <img src="1599315827_logo.png" width="200px" alt="">
        </div>

        <div class="header">

            <div class="header_up">
                <!-- <div class="clear"> -->
                ようこそ<?php
                    try {
                        $stmt2 = $pdo->prepare($sql2);
                        $stmt2->execute();
                        while ($user1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                            echo $user1['last_name'] . $user1['first_name'] . "さん";
                        }
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                        die();
                    }    ?>

            </div>
            <div class="header_down">

                <span>最終ログイン日：<?php              //  echo  date( "Y年m月d日 H時i分s秒" ) ;
                                try {
                                    $stmt2 = $pdo->prepare($sql2);
                                    $stmt2->execute();
                                    while ($user1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                        echo $user1['last_login'];
                                    }
                                } catch (PDOException $e) {
                                    echo 'Error: ' . $e->getMessage();
                                    die();
                                }    ?>

                </span>
            </div>
        </div>


        <div class="main">


            <table>
                <tr>
                    <th>記事ID</th>
                    <th>タイトル</th>
                    <th>カテゴリ</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>

                <?php
                try {
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php
                                if ($row['category_no'] == 1) {
                                    echo "食事";
                                } else if ($row['category_no'] == 2) {
                                    echo "旅行";
                                } else {
                                    echo "その他";
                                }



                                ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><?php echo $row['created']; ?></td>
                        </tr>
                <?php }
                } catch (PDOException $e) {
                    echo 'Error: ' . $e->getMessage();
                    die();
                } ?>
            </table>


        </div>
        <div class="footer"> Y&I group.inc </div>

    </div>
    </div>
</body>

</html>