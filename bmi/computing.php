<?php
//print_r($_GET);
//echo "<br>";

$height=$_GET["height"]; //接收GET
$weight=$_GET["weight"]; 

//echo "身高為:".$height;
//echo "<br>";
//echo "體重為:".$weight;
//echo "<br>";

$bmi=round($weight/(($height/100)*($height/100)),1);

//echo"BMI值為:".$bmi;
//header("location:result.php?bmi=$bmi&result=$result")  同時傳二個以上的值

header("location:result.php?bmi=$bmi"); //傳送資料
?>

