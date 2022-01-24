<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/ss.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <title>Registaration</title>
</head>
<body>

    <div class="hearts_Left"><img src="images/heart.png" alt="heart"></div>
    <div class="hearts_Right"><img src="images/heart.png" alt="heart"></div>
    <div class="fon"></div>
    <?php
    error_reporting(0);
     if($_COOKIE['user'] == ''):?>
    <div class="container">
        <h1 class="form_title">Регистрация</h1>
        <form action="php/check.php" method="POST">
            <input autocomplete="off" type="email" class="form_controlemail" name="email" id="email" placeholder="Введите ваш e-mail">
            <input autocomplete="off" type="text" class="form_controlname" name="name" id="name"  placeholder="Введите ваше имя">
            <input autocomplete="off" type="password" class="form_controlpass" name="pass" id="pass"  placeholder="Придумайте пароль">
            <button class="btn btn-form" type="submit">Зарегистрироваться</button>
            <a href="entryForm.php">Войти</a>
        </form>
    </div>
    <?php else:?>
    <?php header('Location: /SpecialStyle/main.php');?>
    <?php endif;?>
</body>
