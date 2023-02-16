<?php


for ($i = 1; $i < 101; $i++) {

    if ($i % 3 == 0 && $i % 5 != 0) {
        echo "Fizz!";
        echo "<br>";
    } elseif ($i % 5 == 0 && $i % 3 != 0) {

        echo "Buzz!";
        echo "<br>";
    } elseif ($i % 5 == 0 && $i % 3 == 0) {

        echo "FizzBuzz!";
        echo "<br>";
    } elseif ($i % 5 != 0 && $i % 3 != 0) {

        echo $i;
        echo "<br>";
    }
}


echo "<br>";
echo "<br>";
echo "<br>";


$komaranai = ["1." => "パフォーマンス", "2." => "スロークエリ", "3" => "クエリログ"];

// $shirabeta = ["1"=>"しらべ","2"=>"しら２","3"=>"しら３"];

$shirabeta2 = ["<br>ITの分野では、コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、
<br>通信回線・ネットワークなどの伝送速度・容量などのことを指すことが多いです。",

"<br>データベース管理システム（DBMS）に対する問い合わせ（クエリ）のうち、一定の基準に照らして遅い、時間がかかっているものです。
<br> システム性能の制約となるボトルネックとなっている可能性が高い箇所です。
<br>処理に2秒以上かかっていたら遅い部類です。", 


"<br>データベース管理システムに対する問合せ（処理要求）＝クエリのログ（記録）のことです。
<br>対象となるデータベースの種類・仕様によって、クエリも複数の種類があります。
<br>MySQLのクエリログは下記を実行して出力します。<br>
show variables like 'general_log%';<br>
set global general_log = on;
<br>クエリのログを全て出力するのでログファイルの容量はどんどん大きくなります。
<br>容量に余裕がない場合はログの設定をOFFにしたり、ログファイルを定期的に削除するようにしましょう。
<br>ログの出力設定をOFFにするには下記のクエリを実行します。
<br>
set global general_log = off;

"];



foreach ($komaranai as $key => $value) {
    echo $key;
    echo $value;
    echo "とは、";
    if ($key == "1.") {
        echo $shirabeta2[0];
        echo "<br>";
        echo "<br>";
    } elseif ($key == "2.") {
        echo $shirabeta2[1];
        echo "<br>";
        echo "<br>";
    } elseif ($key == "3.") {
        echo $shirabeta2[2];
        echo "<br>";
    }
}

?>