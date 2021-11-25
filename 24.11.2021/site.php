<?
//echo date_default_timezone_get();
date_default_timezone_set('Asia/Yekaterinburg');
//echo date_default_timezone_get();
$today = date("H:m");
if ($today>="08:00" && $today<="20:00"){
    //echo '<body style = "background: white">';
    echo "<link rel='stylesheet' href='Styles.css'>";
    }
else {
    //echo '<body style = "background: black">';
    echo "<link rel='stylesheet' href='Styles2.css'>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
<header class="header">
    <img src="images/Logo.jpg" alt="Упс...ошибка" width="90%" height="80%">
    <a href="TableMendeleev.html">
        <button type="submit">Таблица</button>
    </a>
</header>
<main class="Page">
    <div class="photo">
        <img src="images/Photo.jpg" alt="Упс...ошибка" title="Я" height="100%" width="90%">
    </div>
    <div class="one">Анастасия Пучкова</div>
    <div class="two"><p>Я работаю инженером по охране окружающей среды (экологом) в Энергокомпании, также по
            совместительству в мои обязанности входят задачи инженера технического отдела.</p>
        <p>По образованию я инженер по электроснабжению и
            переводчик английского языка.</p>
        <p> Мое хобби - это театральная студия "Май", в которую я хожу уже 2 года.</p> </div>
    <div class="three"> Занятия курса мне нравятся, и это с учетом того, что дается много знаний и не сразу все усваивается.
        <p>Стараюсь повторять действия Регины, но на занятиях не всегда успеваю, далее по записям многое получается.</p>
        <p>Темп занятий нормальный, медленнее делать не нужно.</p>
        <p>Сложности пока вижу только в том, что у меня нет навыков программирования, a это значит, что мне тяжелее будет даваться курс.</p>
    </div>
</main>
<section class="flex">
    <div class="one_new"> <img src="images/forest.jpg" alt="Не загружено"><p>Лес</p></div>
    <div class="two_new"> <img src="images/mountains.jpg" alt="Не загружено"><p>Горы</p></div>
    <div class="three_new"><img src="images/tree.jpg" alt="Не загружено" height="210"><p>Луг</p></div>
    <div class="four_new"> <img src="images/lake.jpg" alt="Не загружено" height="210"><p>Озеро</p></div>
</section>
<section class="grid">
    <div class="one_one"> <img src="images/roses.jpg" alt="Ошибка" title="Розы"><p>Розы</p></div>
    <div class="two_two"> <img src="images/tulips.jpg" alt="Не загружено" ><p>Тюльпаны </p></div>
    <div class="three_three"><img src="images/pion.jpg" alt="Не загружено" ><p>Пион</p></div>
    <div class="four_four"> <img src="images/gerbera.jpg" alt="Ошибка"><p>Гербера</p></div>
</section>
<footer class="footer">Контакты
    <a href="https://www.instagram.com">Instagram</a>
    <a href="https://www.vk.com">VK</a>
    <a href="https://www.twitter.com"> Twitter</a>
</footer>
</body>
</html>