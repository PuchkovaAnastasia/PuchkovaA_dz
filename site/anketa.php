<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type="text/css" href='styles/styles_a.css'>
    <title>Document</title>
</head>
<body>
<?
if (isset($_POST['submit'])):
    $login = $_POST['name'];
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
$q7=$_POST['q7'];$q8=$_POST['q8'];$q9=$_POST['q9'];$q10=$_POST['q10'];$q11=$_POST['q11'];$q12=$_POST['q12'];
$q13=$_POST['q13'];$q14=$_POST['q14'];$q15=$_POST['q15'];$q16=$_POST['q16'];$q17=$_POST['q17'];$q18=$_POST['q18'];$q19=$_POST['q19'];
$result=0;
if ($q3 == 'Да'){
    $result += 1;
}
if ($q9 == 'Да'){
    $result += 1;
}
if ($q10 == 'Да'){
    $result += 1;
}
if ($q13 == 'Да'){
    $result += 1;
}
if ($q14 == 'Да'){
    $result += 1;
}
if ($q19 == 'Да'){
    $result += 1;
}
if ($q1 == 'Нет') {
    $result += 1;
}
if ($q2 == 'Нет') {
    $result += 1;
}
if ($q4 == 'Нет') {
    $result += 1;
}
if ($q5 == 'Нет') {
    $result += 1;
}
if ($q6 == 'Нет') {
    $result += 1;
}
if ($q7 == 'Нет') {
    $result += 1;
}
if ($q8 == 'Нет') {
    $result += 1;
}
if ($q11 == 'Нет') {
    $result += 1;
}
if ($q12 == 'Нет') {
    $result += 1;
}
if ($q15 == 'Нет') {
    $result += 1;
}
if ($q16 == 'Нет') {
    $result += 1;
}
if ($q17 == 'Нет') {
    $result += 1;
}
if ($q18 == 'Нет') {
    $result += 1;
}
echo $login,',',' вы набрали ', $result, ' балов, а это значит:'. '</br>';
 if ($result > 15){
    echo 'У вас покладистый характер.';
    }
    if ($result >= 8 && $result <=15){
    echo 'Вы не лишены недостатков, но с вами можно ладить.';
    }
    else
        echo 'Вашим друзьям можно посочувствовать.';
    else:
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
   <p>
       <label for="login">Введите имя:</label>
        <input type="text" name="name">
   </p>
    <p style="color: crimson">Ответьте честно на вопросы ниже</p>
    <label for="login">1. Считаете ли Вы, что у многих ваших знакомых хороший характер? </label>
   <p>
        <input type="radio" name="q1" value="Да">Да
        <input type="radio" name="q1" value="Нет">Нет
   </p>
    <label for="login">2. Раздражают ли Вас мелкие повседневные обязанности? </label>
 <p>
        <input type="radio" name="q2" value="Да">Да
        <input type="radio" name="q2" value="Нет">Нет
   </p>
    <label for="login">3. Верите ли Вы, что ваши друзья преданы Вам?</label>
 <p>
        <input type="radio" name="q3" value="Да">Да
        <input type="radio" name="q3" value="Нет">Нет
   </p>
    <label for="login">4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</label>
 <p>
        <input type="radio" name="q4" value="Да">Да
        <input type="radio" name="q4" value="Нет">Нет
   </p>
    <label for="login">5. Способны ли Вы ударить собаку или кошку?</label>
 <p>
        <input type="radio" name="q5" value="Да">Да
        <input type="radio" name="q5" value="Нет">Нет
   </p>
    <label for="login">6. Часто ли Вы принимаете лекарства? </label>
   <p>
        <input type="radio" name="q6" value="Да">Да
        <input type="radio" name="q6" value="Нет">Нет
   </p>
    <label for="login">7. Часто ли Вы меняете магазин, в который ходите за продуктами?  </label>
 <p>
        <input type="radio" name="q7" value="Да">Да
        <input type="radio" name="q7" value="Нет">Нет
   </p>
    <label for="login">8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</label>
 <p>
        <input type="radio" name="q8" value="Да">Да
        <input type="radio" name="q8" value="Нет">Нет
   </p>
    <label for="login">9. Тяготят ли Вас общественные обязанности? </label>
 <p>
        <input type="radio" name="q9" value="Да">Да
        <input type="radio" name="q9" value="Нет">Нет
   </p>
    <label for="login">10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? </label>
 <p>
        <input type="radio" name="q10" value="Да">Да
        <input type="radio" name="q10" value="Нет">Нет
   </p>
    <label for="login">11. Часто ли Вам приходят в голову мысли о Вашей невезучести? </label>
   <p>
        <input type="radio" name="q11" value="Да">Да
        <input type="radio" name="q11" value="Нет">Нет
   </p>
    <label for="login">12. Сохранилась ли у Вас фигура по сравнению с прошлым?</label>
 <p>
        <input type="radio" name="q12" value="Да">Да
        <input type="radio" name="q12" value="Нет">Нет
   </p>
    <label for="login">13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? </label>
 <p>
        <input type="radio" name="q13" value="Да">Да
        <input type="radio" name="q13" value="Нет">Нет
   </p>
    <label for="login">14. Нравится ли Вам семейная жизнь? </label>
 <p>
        <input type="radio" name="q14" value="Да">Да
        <input type="radio" name="q14" value="Нет">Нет
   </p>
    <label for="login">15. Злопамятны ли Вы?</label>
 <p>
        <input type="radio" name="q15" value="Да">Да
        <input type="radio" name="q15" value="Нет">Нет
   </p>
    <label for="login">16. Находите ли Вы, что стоит погода, типичная для данного времени года?  </label>
   <p>
        <input type="radio" name="q16" value="Да">Да
        <input type="radio" name="q16" value="Нет">Нет
   </p>
    <label for="login">17. Случается ли Вам с утра быть в плохом настроении? </label>
 <p>
        <input type="radio" name="q17" value="Да">Да
        <input type="radio" name="q17" value="Нет">Нет
   </p>
    <label for="login">18. Раздражает ли Вас современная живопись? </label>
 <p>
        <input type="radio" name="q18" value="Да">Да
        <input type="radio" name="q18" value="Нет">Нет
   </p>
    <label for="login">19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? </label>
 <p>
        <input type="radio" name="q19" value="Да">Да
        <input type="radio" name="q19" value="Нет">Нет
   </p>
    <p>
        <input type="submit" name="submit" value="Результат теста">
    </p>
   </form>
<?endif;?>
</body>
</html>
