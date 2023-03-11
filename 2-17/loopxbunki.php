<?php

$num = 0;
$sum = 0;

do {
  $num++;
  $dice = mt_rand(1, 6);
echo $num . "回目＝ " . $dice . "<br>";
  $sum += $dice;

  if ($sum >= 40) {
    echo "合計";
    echo $num . "回でゴールしました。<br>";
    break;
  }
} while ($sum < 40);

?>