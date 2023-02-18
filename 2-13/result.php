<?php

$marume = $_POST["marume"];

echo $marume."は、<br>";

//ceil
echo "切り上げたら".ceil($marume)."<br>";
//floor
echo "切り下げたら".floor($marume)."<br>";
//round
echo "四捨五入したら".round($marume)."<br><br><br>";

//pi
echo  "半径".$marume."cmの円の面積は：<br>";

echo "円周率を".pi()."とした時、<br>";

function circleArea($marume){
    $circle_area = $marume * $marume * pi();
    echo $circle_area;
}
echo circleArea($marume)."㎡です。<br><br>";

//mt_rand（乱数）

$ransu= mt_rand(1,10);

//echo

echo "乱数は".$ransu."が出たので、".$marume."×".$ransu."=".$ransu*$marume."<br><br>";

//同じ文章をprintfで出力

$kekka = $ransu*$marume;

printf("乱数は%dが出たので、%d×%d=%d",$ransu,$marume,$ransu,$kekka);
echo "<br><br>";


//文字列に関する関数
//受け取ります

$moji = $_POST["mojiretsu"];

echo $moji;


//strlen（文字列の長さ）

echo "の文字列の長さは、";
echo strlen($moji)."<br>";

//strpos（最初に出てくる配列上の番号検索）

echo strpos($moji, "o")."<br>";

//substr（文字列の切り取り）

echo substr($moji, 0, 2)."<br>";


//str_replace（置換）

echo str_replace("o", "0", $moji)."<br>";




?>


