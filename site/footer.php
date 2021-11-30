<!DOCTYPE html>
<html lang="en"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='styles.css'>
<footer class="footer">
    <div class="task"><p>1.Количество гласных букв на моей странице:</p>
        <?
        $str ='Занятия курса мне нравятся, и это с учетом того, что дается много знаний и не сразу все усваивается.
        <p>Стараюсь повторять действия Регины, но на занятиях не всегда успеваю, далее по записям многое получается.</p>
        <p>Темп занятий нормальный, медленнее делать не нужно.</p>
        <p>Сложности пока вижу только в том, что у меня нет навыков программирования, a это значит, что мне тяжелее будет даваться курс.</p>';
        $array = (explode(' ', $str));
        $vowels = array("а", "е", "и", "о", "у", "э", "ы", "я","ю");
        $length = strlen($str);
        $count = 0;
        foreach($array as $num) {
        for ($i =0; $i < $length; $i++) {
            if (array_search($num[$i], $vowels))
            {
                $count++;
            }
        }
            echo $count;
        }
        ?>
        <p>2.Количество слов на моей странице:</p>
        <?

        ?>
        <p>3.Количество дней между датами: </p>
        <?
        $mydate = "12.04.1986"; // Исходная дата
        $mydate = strtotime("12.04.1986");
        //echo $mydate. '<br>';
        $today = date("D:M:Y");
        $today = time();
        //echo $today. '<br>';
        $datedif = $today - $mydate;
        echo floor ($datedif/(60*60*24));
        ?>
    </div>
    Контакты:
    <a href="https://www.instagram.com">Instagram</a>
    <a href="https://www.vk.com">VK</a>
    <a href="https://www.twitter.com"> Twitter</a>

</footer>
</html>


