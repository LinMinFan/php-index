<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>迴圈</h1>
    <hr>
    <h3>while</h3>
    <?php
    $x = 1; //先判斷條件成立與否再執行

    while ($x <= 5) {    //執行次數
        echo "數字: $x <br>";
        $x++;         //每次執後+1
    }
    ?>
    <h3>範例</h3>
    <?php
    $x = 10;
    echo "10的倍數有: <br>";

    while ($x <= 100) {
        echo " $x <br>";
        $x += 10;
    }
    ?>
    <hr>
    <h3>for</h3>
    <?php
    for ($x = 0; $x <= 10; $x++) {  //由0開始執行至10停止，每次執行後+1
        echo  $x . "<br>";   //0~10
    }
    ?>
    <hr>
    <h3>foreach</h3>
    <?php  //陣列中，( a[] as 索引 => 數值 )
    $colors = ["red", "green", "blue", "yellow"];

    foreach ($colors as $x => $y) {
        echo "我是索引 $x <br>";
        echo "我是數值 $y <br>";
    }
    ?>
    <hr>
</body>

</html>