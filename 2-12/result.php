

<?php
    $my_name = $_POST["my_name"];
    $keihin = $_POST["keihin"];
    $kosu = $_POST["kosu"];
?>
<!doctype html>
<html lang="ja">
<p>お名前：<?php echo $my_name; ?></p>    
<p>ご希望景品<?php echo $keihin; ?></p>    
<p>個数：<?php echo $kosu; ?></p>    

</html>
