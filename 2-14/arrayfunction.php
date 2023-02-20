<?php

//count

$yousos = ["0.5","2.5","2","0.3"];

echo count($yousos)."<br>";

//sort

echo sort($yousos)."<br>";
echo var_dump($yousos)."<br><br>";

//in_array（配列に中にある要素が存在しているか）

if (in_array("0.5", $yousos)){
   echo "0.5あるよ"; 
 }else{
    echo "0.5はないよ";
 }
echo "<br><br>";

 $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
 $and = implode("&", $members);
 var_dump($and);

 echo "<br>";
 echo "<br>";


$re_member = explode("&", $and);
//  var_dump($re_member);
 
 for($i=0;$i<5;$i++){
echo $re_member[$i];
}



?>


