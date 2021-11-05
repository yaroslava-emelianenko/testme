<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Условные выражения';
$description = 'В переменной $min лежит число от 0 до 59. Определите в какую четверть часа попадает это число 
(в первую, вторую, третью или четвертую).';

/**
 * Возвращает в какой четверти находится минуты
 *
 * @param int $minutes
 * @return false|string
 */
function quarter(int $minutes) {
    $result = false;

    if ($minutes >= 0 && $minutes <= 14) {
        $result = 'Первая четверть';
    }
    if ($minutes >= 15 && $minutes <= 29) {
        $result = 'Вторая четверть';
    }
    if ($minutes >= 30 && $minutes <= 44) {
        $result = 'Третья четверть';
    }
    if ($minutes >= 45 && $minutes <= 59) {
        $result = 'Четвертая четверть';
    }

    return $result;
}

$result = '';
$error = '';
$minutes = false;

if (isset($_POST['minutes'])) {
    $minutes = $_POST['minutes'];
    if ($minutes === '') {
        $error = 'Вы не ввели данные';
    }

    if (!$error && !is_numeric($minutes)) {
        $error = 'Вы ввели не число';
    }

    if (!$error && ($minutes <0 || $minutes > 59)) {
        $error = 'Минуты должны быть между 0 и 59';
    }

    if (!$error) {
        $result = quarter($minutes);
    }
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
<p><?= $error; ?></p>
<?php if ($result) { ?><p><?= $minutes;?> - <?= $result; ?></p><?php }?>
<form action="" method="post" class="content">
    <input name="minutes" placeholder="Введите минуты"><br>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>