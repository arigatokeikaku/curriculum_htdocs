<form action = "result.php" method="post">
    お名前：<input type ="text" name ="my_name" /><br>
    ご希望商品：
    <input type="radio" name="keihin" value="A賞">A賞
    <input type="radio" name="keihin" value="B賞">B賞
    <input type="radio" name="keihin" value="C賞">C賞<br>
    個数：
    <select name="個数">
        <option value="1">1</option>
        <option value="1">2</option>
        <option value="1">3</option>
        <option value="1">4</option>
        <option value="1">5</option>
        <option value="1">6</option>
        <option value="1">7</option>
        <option value="1">8</option>
        <option value="1">9</option>
        <option value="1">10</option>
    </select>
    
    <input type="hidden" name="hidden_param" value="隠しパラメータから"　/>

    <input type ="submit" value ="送信するよ！" />
</form>