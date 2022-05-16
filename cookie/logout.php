<?php
if(isset($_COOKIE["login"])){
    setcookie('login',"",time()-120);
    header("location:memcenter.php");
    
}
header("location:index.php");



?>