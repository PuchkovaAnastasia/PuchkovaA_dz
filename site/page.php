<?php
$name1 = 'Anastasia';
$password1=md5('12345');
$name2 = 'Ivan';
$password2=md5('123');
$name3 = 'Eva';
$password3=md5('456');
session_start();
setcookie('site', $_COOKIE['site'], time()+3600*24*30);
if (isset($_POST['submit'])):
    $login = $_POST['login'];
    $user_login = $_POST['login'];
    $user_password = md5($_POST['password']);
    $hostname = 'localhost';
    $username = 'Anastasia';
    $password = 'e12345';
    $dbname = 'Autorization';
    $dbconnect = mysqli_connect($hostname,$username, $password) or die ("-");
    mysqli_set_charset($dbconnect, 'utf8');
    mysqli_query($dbconnect, "CREATE DATABASE $dbname");
    mysqli_select_db($dbconnect, $dbname);
    mysqli_query($dbconnect, "CREATE TABLE Users(ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, Login VARCHAR (30), Password VARCHAR (100))");
    mysqli_query($dbconnect, "INSERT INTO users (ID, Login, Password) VALUES (NULL , '$name1', '$password1'), (NULL , '$name2', '$password2'), (NULL , '$name3', '$password3')");

      if(isset($_POST['login']) && isset($_POST['password'])){
        $sql = mysqli_query($dbconnect, "   SELECT count(*) FROM users WHERE Login = '".$_POST['login']."'AND Password = '".MD5($_POST['password'])."';") or die("-");
        $user = mysqli_fetch_assoc($sql);
        if($user['count(*)']>0){
            $_SESSION['login'] = $_POST['login'];
            echo '<p style = "color:navy">Добро пожаловать на страницу, </p>',
            $login, '!';
        } else
            echo '<p style="color: navy">Неверная пара логин-пароль: авторизация невозможна!</p>';
    }

else;

endif;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='styles/styles1.css'>
    <title>Document</title>
</head>
<body>
<?
if (isset($_COOKIE['site'])){
    switch ($_COOKIE['site']) {
        case 'fact':
            $company = 'Факт';
            break;
        case 'bitrix':
            $company = 'Bitrix';
    }
    echo '<p style = "color:navy">В последний раз вы были на сайте</p>', $company;
}
setcookie('site', $_COOKIE['site'], time()+3600*24*30);
?>
<p><a href= 'https://www.1c-bitrix.ru' >Bitrix</a></p>
<a href= 'https://fact.digital/'>Факт</a>
</body>
</html>
