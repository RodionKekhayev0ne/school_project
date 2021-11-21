<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Registaration</title>
</head>
<body>

    <div class="hearts_Left"><img src="images/heart.png" alt="heart"></div>
    <div class="hearts_Right"><img src="images/heart.png" alt="heart"></div>
    <div class="fon"></div>
    <?php
    error_reporting(0);
     if($_COOKIE['users'] == ''):?>
    <div class="container">
        <h1 class="form_title">Регистрация</h1>
        <form action="php/check.php" method="POST">
            <input type="text" class="form_controlemail" name="email" id="email" placeholder="Введите ваш e-mail">
            <input type="text" class="form_controlname" name="name" id="name"  placeholder="Введите ваше имя">
            <input type="text" class="form_controlpass" name="pass" id="pass"  placeholder="Придумайте пароль">
            <button class="btn btn-form" type="submit">Зарегистрироваться</button>
            <a href="entryForm.php">Войти</a>
        </form>
    </div>
    <?php else:?>
        <h3><a href="/php/exit.php">Exit</a></h3>
    <?php endif;?>
</body>
