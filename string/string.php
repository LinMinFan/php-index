<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>字串函數</h1>
    <hr>
    <h3>字串長度</h3>
    <?php
    $password = "aaddw1123";    //字串字元 =9 / 位置 = 0~8
    $strlen = strlen($password); //計算字串字元,英文以1計算中文須以2+1(空格)=3計算
    echo $strlen;
    ?>
    <h3>取代字串</h3>
    <?php
    $password = "aaddw1123";
    $strlen = strlen($password);
    $password = str_repeat("*", $strlen); //(str,time)取代字串,取代次數
    echo $password;
    ?>
    <h3>以特定字串、字元、符號分割字串為陣列</h3>
    <?php
    $str = "this,is,a,book";

    $array = explode(",", $str);    //在,處分割

    echo "<pre>";
    print_r($array);    //array=[this,is,a,book]
    echo "</pre>";
    ?>
    <h3>將陣列合併為字串</h3>
    <?php
    $str = "this,is,a,book";

    $array = explode(",", $str);

    echo "<pre>";
    print_r($array);    //array=[this,is,a,book]
    echo "</pre>";
    //$newstr=implode(" ",$array);
    $newstr = join(" ", $array);    //$newstr=this is a book
    echo $newstr;
    ?>
    <h3>取出字串(str,0,x)取至第x字元/選定字串首次位置</h3>
    <?php
    $str = "this,is,a,book";
    echo $str;
    echo strlen($str);
    echo "<br>";
    $new = substr($str, 0, 6); //取出$str第0到6字元,substr()適用英數字元,中文字應改以mb_substr()分辨字數
    echo $new . "...";
    $search = "a" ;
    $pos = strpos($str,$search);
    echo $pos;  //字串長度 = 14,"a"在字串位置 0~13 中的 8
    ?>
    <h3>整合應用</h3>
    <?php
    $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
    echo $str;
    echo "<br>";
    echo mb_strlen($str);
    echo "<br>";
    $search = "程式設計" ;  //字串中的關鍵字
    $main = mb_strlen($search);   //關鍵字字數長度
    $pos = mb_strpos($str,$search); //關鍵字起始位置
    $start = mb_substr($str,0,$pos); //取出自0開始至第$pos字數(非位置須注意)
    $startlong = mb_strlen($start); //$start字數長度
    $endlong = mb_strlen($str) - $main - $startlong;    //關鍵字結束至字串尾字數
    $end = mb_substr($str,$pos+$main,$endlong); //取出關鍵字結束後(開始位置+長度)剩餘字數
    echo $start . $search . $end ;  //可分別就起始,關鍵字,結尾分別定義css或變更關鍵字
    ?>
</body>

</html>