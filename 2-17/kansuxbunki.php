<?php


date_default_timezone_set('Asia/Tokyo');

$tim= date('H:i:s');
$dai= intval($tim);

echo "今".$dai."時台です。<br>";



if ($dai < 5||$dai > 18) {
    
    echo "こんばんは";

}else if($dai > 5&&$dai < 11){

echo "おはようございます";


}else{
   echo "こんにちは";
}
 


?>