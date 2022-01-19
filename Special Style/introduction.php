<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/ss.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/intstyle.css">
    <title>Welcome</title>
</head>
<body>
<?php 
    error_reporting(0);
    if($_COOKIE['user'] == ''): ?>

      <div class="header">
<div class="menu">
<div class="logo"><img src="images/logo.png" alt=""></div>
<div class="communicate">
    <div class="amount">0 .руб</div>
    <div class="menu_circle"></div>
    <div class="basket">Корзина<img src="images/корзинка.png" alt=""></div>
    <div class="history">История<img src="images/history 1.png" alt=""></div>
    <div class="choose">Избраное<img src="images/сердце.png" alt=""></div>
    <div class="main">Главная<img src="images/меню.png" alt=""></div>
   </div>
</div>

<div class="head_info">
    <div class="fon"><img src="images/piatna.png" alt="">
    <div class="left"></div>>
    <div class="rightH"></div>
    <div class="rightB"></div>

   <div class="girl"><img src="images/girl.png" alt=""></div>
   <div class="text1"><p class="welcome">Добро пожаловать !!!</p> <p class="elseText">в онлайн магазин Speсial Style</p></div>
   <div class="text2"><p class="elseText">Данный сайт является Demo-версией</p>  <p class="elseText">Здесь вы найдете не все что вам нравится</p></div>
</div>
</div>
</div>
      <div class="main_part">
          <div class="fon_main"><img src="images/piatna.png" alt=""></div>
         <div class="backg"></div>
         <div class="content">
         <div class="title_main"><p>Для использования этого сайта вы обязательно  должны </p><br><p class="t1">пройти регистрацию или войти в уч.запись</p><br><p class="t2">Вы еще не зарегестрированы на данном сайте</p></div>
         <div class="but"></div>
         <div class="buttonr"><a href="registrationForm.php" class="reg">Зарегистрироваться</a></div>
        </div>
      </div>
<div class="footer"></div>
<?php else:?>
       <?php header('Location: /SpecialStyle/main.php');?>
       
    <?php endif;?>
</body>
</html>