<?php
    session_start();
    if($_SESSION['user']){
        header('Location: profile.php');
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
<form action="vendor/signin.php" method="post">
    <label>Логін</label>
    <input type="text"  name="login" placeholder="Введіть логін">
    <label>Пароль</label>
    <input type="text"  name="password" placeholder="Введіть пароль">
     <button type="submit">Увійти</button>
   <p>
       У вас нема профіля
       <a href="register.php">Зареєструйтесь</a>
   </p>
    <?php
    if($_SESSION['message']){
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>
