<?php
    session_start();
if(!$_SESSION['user']){
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>
<form>
    <img src="<?=$_SESSION['user']['avatar']?>" width="100" alt="">
    <h2 style="margin: 10px"> Ваше имя - <?=$_SESSION['user']['full_name']?></h2>
    <a href="#"> Пошта <?=$_SESSION['user']['email']?></a>
    <a href="vendor/logout.php" class="logout">Вихід</a>
</form>
</body>
</html>
