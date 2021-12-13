<?php
$name = md5 ('Anastasia');
$password=md5('12345');
setcookie('site', $_COOKIE['site'], time()+3600*24*7);
if (isset($_POST['submit'])):
    $login = $_POST['login'];
    $user_login = md5($_POST['login']);
    $user_password = md5($_POST['password']);

    if ($name == $user_login && $password == $user_password) {
        echo '<p style = "color:navy">Добро пожаловать на страницу, </p>',
        $login, '!';
        }
    else
        echo '<p style="color: navy">Неверная пара логин-пароль: авторизация невозможна!</p>';
else:


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
