<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">


        <div class="logo">
            <img src="1599315827_logo.png" width="200px" alt="">
        </div>

        <div class="header">

            <div class="header_up">

                ようこそ<?php



                    $dsn = 'mysql:dbname=checktest4;host=localhost';
                    $user = 'root';
                    $password = 'root';
                    try {
                        $dbh = new PDO($dsn, $user, $password);
                    } catch (PDOException $error) {
                        echo "接続失敗:" . $error->getMessage();
                        die();
                    }



                    try {
                        $sq2 = 'select last_name, first_name from users';
                        $stmt2 = $dbh->query($sq2);

                        while ($user1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                            echo $user1['last_name'] . $user1['first_name'] . "さん";
                        }
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                        die();
                    }    ?>

            </div>
            <div class="header_down">

                <span>最終ログイン日：<?php
                                try {
                                    $sq3 = 'select last_login from users';
                                    $stmt3 = $dbh->query($sq3);
                                    while ($user2 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                        echo $user2['last_login'];
                                    }
                                } catch (PDOException $e) {
                                    echo 'Error: ' . $e->getMessage();
                                    die();
                                }    ?>

                </span>
            </div>
        </div>


        <?php




        $sql = 'select id, title, comment from posts';
        $stmt = $dbh->query($sql);

        echo "<table>\n";
        echo "\t<tr><th>id</th><th>itemName</th><th>price</th></tr>\n";
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "\t<tr>\n";
            echo "\t\t<td>{$result['id']}</td>\n";
            echo "\t\t<td>{$result['title']}</td>\n";
            echo "\t\t<td>{$result['comment']}</td>\n";
            echo "\t</tr>\n";
        }
        echo "</table>\n";

        ?>

        <div class="footer"> Y&I group.inc </div>
    </div>

</body>

</html>