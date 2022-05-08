<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>for迴圈應用</h1>
    <hr>
    <h3>星星與空格</h3>
    <?php
    $line = 5; //行數
    for ($i = 0; $i < $line; $i++) {    //設定執行行數

        for ($j = 0; $j <= $i; $j++) {  //每一行輸入*次數，1~行數依序執行1、2、3...
            echo "*";   //畫出正直角三角形
        }
        echo "<br>";
    }
    ?>
    <hr>
    <?php
    $line = 5; //行數

    for ($i = 0; $i < $line; $i++) {

        for ($j = $line; $j > $i; $j--) {   //每一行輸入*次數，1~行數依序執行5、4、3...
            echo "*";   //畫出倒直角三角形
        }
        echo "<br>";
    }
    ?>
    <hr>
    <?php
    $line = 5; //行數

    for ($i = 0; $i < $line; $i++) {
        for ($k = 0; $k < ($line - $i - 1); $k++) { //每一行空格數為行數-1次4、3、2...
            echo "&nbsp;";
        }

        for ($j = 0; $j < ($i * 2 + 1); $j++) { //每一行空格後*次數為行數*2+1次1、3、5、7...
            echo "*";   //畫出正三角形
        }
        echo "<br>";
    }
    ?>
    <hr>
    <?php
    $line = 11; //總行數
    $mid = floor($line / 2);    //中間行

    for ($i = 0; $i < $line; $i++) {
        if ($i > $mid) {    //當行數超過中間行
            $j = $line - $i - 1;    //將變數變為倒數ex：0、1、2變為2、1、0
        } else {
            $j = $i;    //未超過中間行時不做變動
        }
        for ($k = $mid; $k - $j > 0; $k--) {    //每行需要空白數
            echo "&nbsp;";
        }
        for ($l = 0; $l < ($j * 2 + 1); $l++) { //每行需要*數
            echo "*";   //畫出菱形，但僅考慮單數行，若為雙數，需再考慮中間行之判斷式
        }
        echo "<br>";
    }
    ?>
</body>

</html>