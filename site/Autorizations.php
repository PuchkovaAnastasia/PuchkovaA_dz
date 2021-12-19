<?php

class Autorizations
{
    public $name;
    public $password;
    public $hostname = 'localhost';
    public $username = 'Anastasia';
    public $passwords = 'e12345';
    public $dbname = 'Autorization';


    public function __construct($name1, $password1, $name2, $password2, $name3, $password3)
    {
        $this ->name = $name1; $this ->password = $password1;
        $this ->name = $name2; $this ->password = $password2;
        $this ->name = $name3; $this ->password = $password3;

    }

    public function connect()
    {
        $dbconnect = mysqli_connect($this->hostname, $this->username, $this->passwords) or die ("-");
        mysqli_set_charset($dbconnect, 'utf8');
        mysqli_select_db($dbconnect, $this ->dbname);
        mysqli_query($dbconnect, "CREATE TABLE Users(ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, Login VARCHAR (30), Password VARCHAR (100))");
        mysqli_query($dbconnect, "INSERT INTO users (ID, Login, Password) VALUES (NULL , '$this->name', '$this->password')");
    }
public function check() {
    if(isset($_POST['login']) && isset($_POST['password'])){
        $sql = mysqli_query($this->dbconnect, "   SELECT count(*) FROM users WHERE Login = '".$_POST[$this->name]."'AND Password = '".MD5($_POST[$this->password])."';") or die("-");
        $user = mysqli_fetch_assoc($sql);
        if($user['count(*)']>0){
            $_SESSION['login'] = $_POST['login'];
            echo '<p style = "color:navy">Добро пожаловать на страницу, </p>';

        } else
            echo '<p style="color: navy">Неверная пара логин-пароль: авторизация невозможна!</p>';
    };
}


}


