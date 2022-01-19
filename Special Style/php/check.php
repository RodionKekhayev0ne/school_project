<?php 

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

   if(mb_strlen($name) < 5 || mb_strlen($name) > 50){
         echo "Недопустимая длина логина";
         exit();
   }else if(mb_strlen($email) < 15 || mb_strlen($email) > 90){
      echo "\n"."Недопустимая длина электронной почты";
      exit();
   }else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 15){
      echo "\n"."Недопустимая длина пороля (от 3 до 15 символов)";
      exit();
   }


$message = '
<html>
<body>
<center>
<table style="max-width: 600px; width: 100%;">
        <tr><td><img src="email.jpg"><td><tr>
';

$headers = "Content-type: text/html; charset=utf-8\r\n";

   mail($email,'Благодарность',$message,$headers);

  $pass = md5($pass."gfhtyrhn9374");

  $mysql = new mysqli('localhost','root','2006','usersdata');

  $mysql->query("INSERT INTO `users` (`email` , `pass`, `name`) VALUES('$email','$pass','$name' )");
  $mysql->close();

  

  header('Location: /SpecialStyle/main.php');

?>