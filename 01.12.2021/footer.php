<!DOCTYPE html>
<html lang="en"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
<footer class="footer">
    <div class="task">
        <?
        function difference($birthdate)
        {
            //$birthdate = "12.04.1986";
            $birthdate = strtotime($birthdate);
            $today = date("jS M Y");
            echo "<p> Сегодня: $today</p>";
            $today = time();
            $dateDiff = $today - $birthdate;
            echo '<p> Количество дней между моим ДР и сегодняшним днем: </p>';
            echo (int)($dateDiff / (60 * 60 * 24));
        }
        echo difference('12.04.1986');
        ?>
    </div>
    <div> Контакты:</div>
    <a href="https://www.instagram.com">Instagram</a>
    <a href="https://www.vk.com">VK</a>
    <a href="https://www.twitter.com"> Twitter</a>
</footer>
</html>


