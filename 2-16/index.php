<?php

$testFile = "test2.txt";
$contents = "こんにちは！";

if(is_readable($testFile)){
    echo "readable!";
    $fp = fopen($testFile,"r");

    while($line = fgets($fp)){
        echo $line.'<br>';
    }

    fclose($fp);
    echo "finish reading";
}else{
    echo "not readable";
    exit;
}



// $testFile = "test.txt";
// $contents = "こんにちは！";

// if(is_writable($testFile)){
//     echo "writable!";
//     $fp = fopen($testFile,"a");
//     fwrite($fp,$contents);
//     fclose($fp);
//     echo "finish writing";
// }else{
//     echo "not writable";
//     exit;
// }

?>


