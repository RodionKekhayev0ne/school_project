<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/ss.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/dev.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>О разработчике</title>
</head>
<body>
    <?php 
    error_reporting(0);
    
    ?>

    <div class="menu">
        <div class="logo"><img src="images/logo.png" alt=""></div>
      
        <div class="communicate">
            

            <div id="mmenu" class="basket"><a href="noaccess.php">Корзина<img src="images/корзинка.png" alt=""></a></div>
            <div id="mmenu" class="history"><a href="noaccess.php">История<img src="images/history 1.png" alt=""></a></div>
            <div id="mmenu" class="choose"><a href="noaccess.php">Избраное<img src="images/сердце.png" alt=""></a></div>
            <div id="mmenu" class="main"><a href="main.php">Главная<img src="images/меню.png" alt=""></a></div>
            <ul class="qmenu" ><img class="dd" src="images/squares.png" alt="">
                <li id="first" class="menu-element"><a href="personal_cabinet.php">Личный кабинет</a></li>
                <li id="s"class="menu-element"><a href="noaccess.php">Благодарность</a></li>
                <li id="o"class="menu-element"><a href="developer.php">О разработчике</a></li>
                <li id="last" class="menu-element"><a href="exit.php">Exit<img src="images/logout.png" alt=""></a></li>  
          </ul>
    </div>
</div>
<!-- ***************************************CENTER********************************************** -->
<div class="cont">
<div class="devphot"><img src="images/devPhoto.jpg" alt=""></div>
<div class="devtext"><h1>Привет!</h1>
<h2>Меня зовут Кехаев Родион</h2>
<p>Я разработчик этого сайта.</p><p> Данный сайт я начал разрабатывать </p><p> в сентябре 2021 года</p><p> на его создание ушло 4 месяца</p>
<p>Сайт написан с использованием языков програмирования PHP и JavaScript а также были использованы JavaScript библиотеки и плагин OwlCarusel. Основа написана на HTML5 и CSS3.</p>
</div>
</div>
<!-- ***************************************FOOTER********************************************** -->


<div class="footer">
           <div class="container">
               <div class="col-1"><p class="ftx">Проблемы с сайтом?</p><p>Hапиши нам.</p><p class="email">SStyle.support@mail.ru</p>
            </div>
               <div class="col-2">
                   <div class="links">
                   <a href="https://vk.com/liveoutside00"target="_blank"><img src="images/pngegg (7).png" class="vk" alt=""></a>
                   <a href="https://www.instagram.com/lovel1l3/"target="_blank"><img src="images/pngegg (8).png" class="inst" alt=""></a>
                   <a href="https://twitter.com/Rodion80767892"target="_blank"><img src="images/pngegg (9).png" class="tw" alt=""></a>
                </div>
               </div>
               <div class="col-3">
                   
                   <p id="fir" class="bio">Данный сайт был создан для получения хорошей оценки</p>
                   <p class="bio">Далее сайт развиваться не будет!!!</p>
                
               </div>
           </div>
       </div>



     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="scripts/owl.carousel.min.js"></script>
        <script src="scripts/script.js"></script>
        <script src="scripts/menu.js"></script>
</body>
</html>