<?php
$default_user="jack";
$default_pw="1234";

$acc=$_POST["acc"];
$pw=$_POST["pw"];

$error="";
$user="";

// echo "歡迎登入";
// echo "<a href='login.php'>回首頁</a>";
// echo "帳號密碼錯誤，請重新輸入";
// echo "<a href='login.php'>回登入頁</a>";

if($acc !== $default_user || $pw !== $default_pw){
    $error="帳號或密碼錯誤。";
    header("location:login.php?error=$error") ;
}else{
    setcookie('login',$acc,time()+120);
    header("location:memcenter.php");}

?>