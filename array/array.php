<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>陣列</h1>
    <hr>
    <h3>陣列宣告/取用</h3>
    <?php
    $a = [];  //空陣列
    $a = ["A", "B", "C"];   //宣告時給值,索引0,1,2 ; 給值A,B,C
    $a = ["A" => 5, "B" => 2]; //宣告定值$a[A]=5,$a[B]=2
    echo $a["A"];   //取用索引A值5
    ?>
    <h3>陣列常用函數</h3>
    <?php
    $a = ["A", "B", "C"];
    //is_array();檢查是否為陣列
    if (is_array($a)) {
        echo "我是陣列";
    }
    ?>
    <br>
    <?php
    $a = ["A", "B", "C"];
    //in_array();檢查某值是否在陣列中
    if (in_array("A", $a)) {
        echo "A有在裡面";
    }
    ?>
    <br>
    <?php
    $a = ["A", "B", "C", "Z", "G", "Y", "D"];
    print_r($a);
    echo "<br>";
    //sort()由值小至大排序並不保留鍵恢復成索引;rsort()值由大至小排序
    sort($a);
    print_r($a);
    echo "<br>";
    rsort($a);
    print_r($a);
    ?>
    <br>
    <?php
    //array_fill()陣列中填滿某值
    $a = array_fill(0, 3, 'banana');    //(索引起始,填入次數,填入內容)
    print_r($a);
    ?>
    <h3>陣列應用範例</h3>
    <?php

    $nine = []; //設定空陣列

    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            $nine["{$i} x {$j}"] = $i * $j; //使用迴圈將九九乘法表填入陣列
        }
    }
    print_r($nine);
    ?>
    <br>
    <?php
    $lotto = [];    //設定空陣列
    while (count($lotto) < 6) { //使用迴圈取6個數加入陣列
        $num = rand(1, 38); //數字範圍為1~38
        if (!in_array($num, $lotto)) {  //判斷數字不重複
            $lotto[] = $num;
        }
    }
    echo "開獎號碼<br>";
    echo "第一區<br>";
    for ($i = 0; $i < count($lotto); $i++) {    //利用迴圈呼叫陣列索引 => 值
        echo $lotto[$i] . ",";
    }
    echo "<hr>";
    echo "第二區<br>";
    echo rand(1, 8);
    ?>



</body>

</html>