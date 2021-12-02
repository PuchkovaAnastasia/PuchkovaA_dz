<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?
    require_once 'header.php'
    ?>
</head>
<body>


<?

//1.Задача
$n=25;
$arr = [];
for($i=0; $i<$n;$i++) {
    $arr[] = mt_rand(0, 100);
    }
foreach ($arr as $num) {
    if ($num % 2 != 0) {
        echo "$num". '<br>';
    }
    else
        echo "<b>$num</b>". '</br>';
    }

// 2. Задача
$a = array(
    'Fruit' => array('Apple', 'Orange', 'Ananas'),
    'Car' => array('BMW', 'Audi', 'Volkswagen'),
    'Color' => array('Red', 'Blacr', 'Amber')
);
foreach ($a as $key => $fruit) {
    foreach ($fruit as $color) {
        if ($color[0] == "A") {
            echo $color . "<br/>";
        }
    }
}

//3. Задача
$a = array(
     25 => array(1, 10, 35),
    50 => array(2, 4, 100),
    75 => array(3, 18, 23),
);
echo count($a, COUNT_RECURSIVE).'</br>';
echo count($a[25]). '</br>';
echo count($a[50]). '</br>';
echo count($a[75]). '</br>';
?>
</body>
<footer>
    <?
    require_once 'footer.php'
    ?>
</footer>
</html>
