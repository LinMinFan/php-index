<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- 也可直接寫於php外如
     <h1>BMI值為<?$_GET["bmi"]?></h1> -->

    <?php

    $bmi = $_GET["bmi"]; //下方$bmi可全部直接套用 $_GET["bmi"];
    echo "<h1>BMI值為$bmi</h1>"; 


    echo "<br>";

    ?>
    <?php

        if ($bmi < 18.5) {
            echo "BMI ＜ 18.5:體重過輕";
        } else if($bmi >= 18.5 && $bmi < 24){
            echo "BMI ＜ 18.5:正常範圍";
        }else if($bmi >= 24 && $bmi < 27){
            echo "24≦BMI＜27:過重";
        }else if($bmi >= 27 && $bmi < 30){
            echo "27≦BMI＜30:輕度肥胖";
        }else if($bmi >= 30 && $bmi < 35){
            echo "30≦BMI＜35:中度肥胖";
        }else if($bmi > 35){
            echo "BMI≧35:重度肥胖";
        }
        

    ?>
    <a href="./get.html"><button>重新計算</button></a>
</body>

</html>