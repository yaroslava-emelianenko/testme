<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Условные выражения';
$description = 'Проверьте то, что переменная $test равна 10.';

$result = '';
$test = 10;

if ($test == 10) {
    $result = 'равна';
} else {
    $result = 'не равна';
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
<p><?= $test;?> <?= $result; ?> 10</p>
</body>
</html>