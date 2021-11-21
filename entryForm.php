<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styleforentry.css">
    <title>Entry</title>
</head>
<body>
<?php 
error_reporting(0);
if($_COOKIE['user'] == ''): ?>

    <div class="hearts_Left"><img src="images/heart.png" alt="heart"></div>
    <div class="hearts_Right"><img src="images/heart.png" alt="heart"></div>
    <div class="fon"></div>
    
    <div class="container">
        <h1 class="form_title">Вход</h1>
        <form action="php/auth.php" method="POST">
            <input type="text" class="form_controlemail" name="name" id="name" placeholder="Введите ваше имя">
            <input type="text" class="form_controlpass" name="pass" id="pass"  placeholder="Введите ваш пароль">
            <button class="btn btn-form" type="submit">Войти</button>
            <a href="registrationForm.php">Зарегистрироваться </a>
        </form>
    </div>

    <?php else:?>
       <?php header('Location: /SpecialStyle/main.php');?>
    <?php endif;?>
</body>
<!-- <a href="php/exit.php">Exit</a> -->