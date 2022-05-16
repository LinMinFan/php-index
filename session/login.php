<?php
session_start();
if(isset($_SESSION["login"])){
    header("location:memcenter.php") ;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用session帳號密碼登入</title>
    <style>
        *{
            box-sizing: border-box;
        }
        h1{
            text-align: center;
        }
        .main{
            border:1px solid lightgray;
            width: 960px;
            height: 540px; 
            background-color:blanchedalmond;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0 auto;
        }
        .submit{
            width: 194px;
            height: 108px;
            display: flex;
            justify-content: space-around;
            align-items:center;
        }
    </style>
</head>
<body>
<?php

if(isset($_GET['error'])){
    echo "<h3 style='color:red'>{$_GET['error']}</h3>";
}

?>
    <h1>會員登入</h1>
    <form action="chklogin.php" method="post">
        <div class="main">
            <div class="acc">
                <label for="">帳號:</label>
                <input type="text" name="acc" id="">
            </div>
            <br>
            <div class="pw">
                <label for="">密碼:</label>
                <input type="text" name="pw" id="">
            </div>
            <div class="submit">
                <input type="submit" value="登入">
                <input type="reset" value="重置">
            </div>
        </div>
    </form>
</body>
</html>