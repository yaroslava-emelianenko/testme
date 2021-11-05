<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Условные выражения';

/*
 * VIEW BLOCK / Вид сайта
 * В этой части идёт вывод HTML и PHP
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?>></title>
</head>
<body>
<h1><?= $title; ?></h1>
<a href="1.php">Проверьте то, что переменная $test больше 10.</a><br>
<a href="2.php">Проверьте то, что переменная $test меньше 10.</a><br>
<a href="3.php">Проверьте то, что переменная $test больше или равна 10.</a><br>
<a href="4.php">Проверьте то, что переменная $test меньше или равна 10.</a><br>
<a href="5.php">Проверьте то, что переменная $test равна 10.</a><br>
<a href="6.php">Проверьте то, что переменная $test не равна 10.</a><br>
<a href="7.php">Даны переменные $test1 и $test2. Проверьте, что значение какой из этих переменных
    больше и выведите соответствующее сообщение на экран.</a><br>
<a href="8.php">В переменной $min лежит число от 0 до 59. Определите в какую четверть часа попадает это число
    (в первую, вторую, третью или четвертую).</a><br>
</body>
</html>