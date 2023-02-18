<!doctype html>
<html lang="ja">
<form action = "result.php" method="post">
    お名前：<input type ="text" name ="my_name" /><br>
    ご希望商品：
    <input type="radio" name="keihin" value="A賞">A賞
    <input type="radio" name="keihin" value="B賞">B賞
    <input type="radio" name="keihin" value="C賞">C賞<br>
    個数：
    <select name="kosu">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    
    <input type="hidden" name="hidden_param" value="隠しパラメータから"　/>

    <input type ="submit" value ="送信するよ！" />
</form>
</html>