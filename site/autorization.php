<?php
$name = md5 ('Anastasia');
$password=md5('12345');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='styles1.css'>
    <title>Document</title>
</head>
<body>
<?
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
?>
<form method="post" action="<?$_SERVER['PHP_SELF']?>">
   <label for="login">Введите логин:</label>
   <p>
        <input type="text" name="login" id = login size="25">
    </p>
    <label for="password">Введите пароль:</label>
    <p>
        <input type="password" name="password" id = password size="25">
    </p>
    <p>
        <input type="submit" name="submit" value="Отправить">
    </p>
</form>
<?endif;?>
</body>
</html>
