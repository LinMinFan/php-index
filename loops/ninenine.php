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
    <h3>九九乘法表</h3>
    <?php

    for ($i = 1; $i < 10; $i++) { //被乘數1~9


        for ($j = 1; $j < 10; $j++) { //乘數1~9
            if ($j == 9) {
                echo $i * $j . "<br>"; //每一被乘數乘9後換行
            } else {
                echo $i * $j . "&nbsp;";    //每一數之間留一空格
            }
        }
    }
    ?>
</body>

</html>