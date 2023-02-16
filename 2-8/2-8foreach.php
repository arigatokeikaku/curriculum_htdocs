<?php

$fruits = ["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];

foreach($fruits as $key => $value){
    echo $key;
    echo "といったら";
    echo $value;
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";


$komaranai = ["1."=>"トランザクション","2."=>"排他ロック","3"=>"チューニング"];

// $shirabeta = ["1"=>"しらべ","2"=>"しら２","3"=>"しら３"];
$shirabeta2 = ["<br>処理を意味する言葉で、コンピュータ用語としては密接に関連していて切り離すことができない複数データや、一まとめに処理を行う単位、またはそのデータのことを指します。<br> 主にデータベースの更新データを指す場合が多いです。
","<br>データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つで、<br>他の実行主体によるアクセスを完全に禁止するものです。","<br>コンピュータ関連では、システムのハードウェアやソフトウェアを調整して、<br>処理性能を向上させたり、利用効率の改善を図ったりすることを指します。<br>SQLチューニングは、SQL文のパフォーマンスを、特定の測定可能かつ達成可能な目標に合うように向上させる反復プロセスです。

"];



foreach($komaranai as $key => $value){
    echo $key;
    echo $value;
    echo "とは、";
   if($key=="1."){
    echo $shirabeta2[0];
    echo "<br>";
    echo "<br>";
   }elseif($key=="2."){
    echo $shirabeta2[1];
    echo "<br>";
    echo "<br>";
   }elseif($key=="3."){
    echo $shirabeta2[2];
    echo "<br>";
   }



}

//    for($i=0;$i<3;$i++){
//      echo $shirabeta2[$i];
// }




// $fruits = ["りんご","みかん","もも"];

// foreach($fruits as $value){
//     echo $value;
// }

// echo "<br>";

// $fruits = ["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];

// foreach($fruits as $key => $value){
//     echo $key;
//     echo $value;
// }

// echo "<br>";




?>