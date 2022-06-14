<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>自訂函式語法格式</h2>
    <ul>
        <h3>程式碼內容</h3>
        <div>function中的變數有區域性 <br>
            要取用function外的全域變數時使用global關鍵字 <br>
            回傳值使用return <br>
            可設定參數的預設值</div>
        <li>
            function name($var1, $var2) <br>
            { <br>
            程式碼內容 <br>
            }
        </li>
        <h3>不定參數函式</h3>
        <li>
            function name($var, ...$arg) <br>
            { <br>
            程式碼內容 <br>
            } <br>
        </li>
        <div>$arg為陣列的型式</div>
        <h3>不定參數範例</h3>
        <li>
            sum(1,999); <br>
            sum(1,2,3,4,5); <br>
            sum(55,99,88); <br>
            sum(1); <br>
            function sum(...$arg){ 參數會被放入一個陣列中 <br>
            echo array_sum($arg); <br>
            $sum=0; <br>
            foreach($arg as $i){ <br>
            $sum=$sum+$i; <br>
            } <br>
            echo $sum; <br>
            } <br>
        </li>
    </ul>
    <h3>自訂函式練習</h3>
    <div>給定一個正整數的數值後，會印出對應行數的正三角形星星(依此類推可以設計印菱形，方形的函式)
    </div>
    <?php
    $size = isset($_GET['size']) ? $_GET['size'] : 3;
    $shap = isset($_GET['shap']) ? $_GET['shap'] : '正三角形';
    ?>
    <form action="function.php">
        大小:<input type="number" name="size" value="<?= $size; ?>">&nbsp;&nbsp;
        形狀: <select name="shap">
            <option value="正三角形" <?= ($shap == '正三角形') ? 'selected' : ''; ?>>正三角形</option>
            <option value="菱形" <?= ($shap == '菱形') ? 'selected' : ''; ?>>菱形</option>
        </select>
        <input type="submit" value="繪製">
    </form>
    <?php
    //繪製function開始
    starts($size, $shap);
    //繪製結束
    ?> <?php
    //定義function lines = 行數 type = 形狀
    function starts($lines, $type)
    {
        //使用switch選擇形狀須帶入的迴圈公式
        switch ($type) {
            case '正三角形':
                //正三角形迴圈
                for ($i = 0; $i < $lines; $i++) {

                    for ($k = ($lines - 1); $k > $i; $k--) {

                        echo "&nbsp;";
                    }
                    for ($j = 0; $j < ($i * 2 + 1); $j++) {

                        echo "*";
                    }

                    echo "<br>";
                }
                break;
            case "菱形":
                //菱形令設定函式帶入
                diamond($lines);
                break;
        }
    }
    //菱形函式
    function diamond($lines)
    {
        $size = $lines;

        //先判斷是否為奇數
        if ($size % 2 == 0) {
            $size = $size + 1;
        }
        //給定最小行數為3
        if ($size < 3) {
            $size = 3;
        }
        //菱形迴圈公式
        for ($i = 0; $i < $size; $i++) {
            //抓出中間行
            if ($i <= (($size - 1) / 2)) {
                $space = ($size - 1) / 2 - $i;
                $stars = $i * 2 + 1;
            } else {
                $space = $i - ($size - 1) / 2;
                $stars = ($size - $i) * 2 - 1;
            }

            //印空白
            for ($k = 0; $k < $space; $k++) {
                echo "&nbsp;";
            }

            //印星星
            for ($j = 0; $j < $stars; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    ?>
</body>

</html>