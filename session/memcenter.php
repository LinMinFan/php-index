<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用session帳號密碼登入</title>
</head>

<body>
    <?= session_start(); ?>
    <h1>歡迎<?= $_SESSION['login']; ?></h1>
    <a href="./index.php">首頁</a>
    </li>
    <li>
        <a href="./logout.php">登出</a>
    </li>

</body>

</html>