<?php
// $variable = 4;
// $variable = 'Goodby World';
// $variable = false;
// $variable = 3.14;
// $variable = null;
$variable = [];


if (is_bool($variable)) {
        $type = "$variable is bool <hr> Логический тип данных. Переменные логического типа могут принимать два значения: true или false";
    } elseif (is_float($variable)) {
        $type = "$variable is float <hr> Число с плавающей точкой. Используется для вещественных чисел.";
   
    } elseif (is_int($variable)) {
        $type = "$variable is int <hr> Целое 32-битное число со знаком. Возможные значения в диапазоне от -2 147 483 648 до 2 147 483 647.";
    } elseif (is_string($variable)) {
        $type = "$variable is string <hr> Строковый тип данных применяется для работы с текстом.";
    } elseif (is_null($variable)) {
        $type = "$variable is null <hr>  NULL указывает, что значение переменной не определено.";
    } else {
        $type = "$variable is other";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?= $type ?></p>
</body>
</html> 