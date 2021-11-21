
<?php 

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);



$pass = md5($pass."gfhtyrhn3324");

$mysql = new mysqli('localhost','root','2006','usersdata');

$result = $mysql->query("SELECT * FROM `users` WHERE  `name` = '$name' AND `pass` = '$pass' ");

$user = $result->fetch_assoc();

print_r($user);


if($user == 0){
    echo "неправильный логин или пороль";
    exit();
}

setcookie('user', $user['name'],time() + 3600 * 24 * 30, "/" );

$mysql->close();
header('Location: /SpecialStyle/main.php');

?>