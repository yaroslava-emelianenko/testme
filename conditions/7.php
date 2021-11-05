<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Условные выражения';
$description = 'Даны переменные $test1 и $test2. Проверьте, что значение какой
 из этих переменных больше и выведите соответствующее сообщение на экран.';

$result = '';
$test1 = 1;
$test2 = 2;

if ($test2 > $test1) {
    $result = 'больше';
} else {
    $result = 'меньше';
}
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
<h1><?= $description; ?></h1>
<h3>Результат:</h3>
<p><?= $test2;?> <?= $result; ?> 1</p>
</body>
</html>