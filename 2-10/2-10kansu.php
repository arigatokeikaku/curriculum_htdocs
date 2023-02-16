<?php

function getCubeVolume($tate,$yoko, $height){
    $volume = $tate* $yoko * $height;
    print "立方体の体積は".$volume."だよ。";
}

getCubeVolume(5,10,8);

echo "<br>";
echo "<br>";
echo "<br>";


$komaranai = ["1." => "ハッシュ化", "2." => "総合テスト", "3" => "デバッグ"];


$shirabeta2 = ["<br>データを不規則な文字列に変換する手法のことです。 
<br>変換されたデータはハッシュ値と呼ばれ、データの変換にはハッシュ関数と呼ばれるアルゴリズムが使われています。
<br> 同一のデータから変換されるハッシュ値は常に同一の結果となるため、変換後は元に戻せない性質（不可逆性）があることが特徴です。",

"<br>システムテストとも呼ばれ、ソフトウェアおよびシステムの検証手法の１つです。
<br> 構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証することです。
<br> 単体テスト、結合テストの実行後に、本番とほぼ同じ環境でテストを実施します。
<br>「テスト計画」、「テスト設計」、「テスト準備(環境・データ)」、「テスト実行」、「テスト実行進捗管理」、「テスト完了」のプロセスから構成され、開発の設計・実装工程と並行して行います。
", 


"<br>プログラム内の誤り（バグ, bug）を見つけて意図した通りの動作に修正する作業のことです。不具合の原因を探して直すことです。
<br>"];



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




// function getTriangleArea($base, $height){
//     $area = $base * $height /2;
//     print "三角形の面積は".$area."だよ。";
// }

// getTriangleArea(10,5);
// getTriangleArea(15,8);
// getTriangleArea(8,6);


// function sayHi($name = "後藤"){
//     $myname ="php";
//     return "はい".$name."フロム".$myname;
// }

// echo sayHi();

?>