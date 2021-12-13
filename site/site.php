<?php
function timefon() {
//echo date_default_timezone_get();
    date_default_timezone_set('Asia/Yekaterinburg');
//echo date_default_timezone_get();
    $today = date("H:m");
    if ($today >= "08:00" && $today <= "20:00") {
        //echo '<body style = "background: white">';
        echo "<link rel='stylesheet' type='text/css' href='styles/styles.css'>";
    } else {
        echo '<body style = "background: dimgray">';
        //echo "<link rel='stylesheet' href='styles/Styles2.css'>";
    }
}
echo timefon();
if (isset($_POST['color_button']) && ($_POST['background-color'])) {
    $color = $_POST['background-color'];
    setcookie("background-color", $color, time() + 3600 * 24 * 30);
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
<?
require "header.php";
?>

<main class="Page" style="background-color: <?=$_COOKIE['background-color']?>">
    <div class="photo">
        <img src="images/Photo.jpg" alt="Упс...ошибка" title="Я" height="100%" width="90%">
    </div>
    <div class="one">
        <?
    $fio = 'Анастасия Пучкова';
    echo $fio;
        ?>
    </div>
    <div class="two">
        <?
        $info= "Я работаю инженером по охране окружающей среды (экологом) в Энергокомпании, также по совместительству в мои обязанности входят задачи инженера технического отдела.
                <p>По образованию я инженер по электроснабжению и переводчик английского языка.</p>
        <p> Мое хобби - это театральная студия Май, в которую я хожу уже 2 года.</p>";
        function colorInfo($str)
        {
            $infoArray = explode('.', $str);
            $infoArray[0] = "<span style = 'color: red'> $infoArray[0]</span>";
            $my_info = implode('.', $infoArray);
            echo $my_info;
        }
        echo colorInfo($info);
        ?>
        </div>
    <div class="three">
        <?
        $str = 'Занятия курса мне нравятся, и это с учетом того, что дается много знаний и не сразу все усваивается.
        <p>Стараюсь повторять действия Регины, но на занятиях не всегда успеваю, далее по записям многое получается.</p>
        <p>Темп занятий нормальный, медленнее делать не нужно.</p>
        <p>Сложности пока вижу только в том, что у меня нет навыков программирования, a это значит, что мне тяжелее будет даваться курс.</p>';
        $array = explode(' ', $str);
        foreach ($array as $num => $item) {
            ($num %2 === 0) ? $array[$num] = "<span style = 'color: green'>$item</span>" : $array[$num] = "<span style = 'color: darkblue'>$item</span>";
            }
            $ar = implode(' ', $array);
            echo $ar;
        ?>
    </div>
</main>
<section class="flex" style="background-color:<?=$_COOKIE['background-color']?>"">
    <div class="one_new"> <img src="images/forest.jpg" alt="Не загружено"><p> <?$a = 'Лес'; echo $a ?>  </p></div>
    <div class="two_new"> <img src="images/mountains.jpg" alt="Не загружено"><p><? $b = 'Горы'; echo $b ?> </p></div>
    <div class="three_new"><img src="images/tree.jpg" alt="Не загружено" height="210"><p><? $c = 'Луг'; echo $c ?> </p></div>
    <div class="four_new"> <img src="images/lake.jpg" alt="Не загружено" height="210"><p><? $d = 'Озеро'; echo $d ?> </p></div>
</section>
<section class="grid" style="background-color: <?=$_COOKIE['background-color']?>">
    <div class="one_one"> <img src="images/roses.jpg" alt="Ошибка" title="Розы"><p><? $e = 'Розы'; echo $e ?></p></div>
    <div class="two_two"> <img src="images/tulips.jpg" alt="Не загружено" ><p><? $f='Тюльпаны'; echo $f ?> </p></div>
    <div class="three_three"><img src="images/pion.jpg" alt="Не загружено" ><p><? $g ='Пион'; echo $g ?> </p></div>
    <div class="four_four"> <img src="images/gerbera.jpg" alt="Ошибка"><p><? $h = 'Гербера'; echo $h ?> </p>
    </div>
</section>
<form id = "background-color"  method="post">
    <p style="color: darkred">Выбери цвет фона</p>
    <input type="color" list="preset_colors" id ="background-color" value="<?=$_COOKIE['background-color']?>" name="background-color">
<datalist id = "preset_colors">
    <option value="#E21217" >Красный</option>
    <option value="#E2A117" >Желтый</option>
    <option value="#008000" >Зеленый</option>
    <option value="#0000FF">Синий</option>
</datalist>
    <button type="submit" name="color_button" id="color_button">Выбери цвет</button>
    </form>
<div class="task">
<p>Количество гласных букв на моей основной странице:</p>
<?
function vowelsSum($str){
$vowels = preg_match_all('/[аеиоуэыяю]/iu', $str);
    echo $vowels;
}
echo vowelsSum($fio.$info.$str.$a.$b.$c.$d.$e.$f.$g.$h);
?>
<p>Количество слов на моей основной странице:</p>
<?
function wordsSum($str)
{
    $words = str_word_count($str, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    echo $words;
}
echo wordsSum($fio . $info . $str . $a . $b . $c . $d . $e . $f . $g . $h);
?>
</div>
</body>
<footer>
    <?php
    require_once "footer.php";
    ?>
</footer>
</html>
