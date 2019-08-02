<?php
$time = date("H");
$day = date("N");

// $time = 11;
// $day = 7;  //Это для проверки кода

switch ($day) {
    case 1:
        $day = "понедельник";
        break;
    case 2:
        $day = "вторник";
        break;
    case 3:
        $day = "среда";
        break;
    case 4:
        $day = "четверг";
        break;
    case 5:
        $day = "пятница";
        break;
    case 6:
        $day = "суббота";
        break;
    case 7:
        $day = "воскресенье";
        break;
}




if ($day == "воскресенье") {
        $schedule = "<br><br> Завтра - лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас с 09.00";  
    } elseif (($day == "понедельник" xor $day == "вторник") && $time >= 18 ) {
        $schedule = "<br><br> Завтра - лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас с 09.00";
    } elseif (($day == "среда" xor $day =="четверг" xor $day =="пятница")  && $time >=18) {
        $schedule = "<br><br> Завтра - лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас с 10.00";
    } elseif ($day == "суббота" && $time >= 18) {
        $schedule = "<br><br> Послезавтра - лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас с 09.00";
    } elseif (($day == "понедельник" xor $day == "вторник" xor $day == "среда") && $time < 9) {
        $schedule = "<br><br> Это лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас c 9.00 до 18.00";
    } elseif (($day == "четверг" xor $day == "пятница" xor $day == "суббота") && $time < 10) {
        $schedule = "<br><br> Это лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас c 10.00 до 18.00";
    } else {
        $schedule = "<br><br> Это лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас до 18.00";
    }


if ($time >= 6 && $time < 11) {
        $greeting = "Доброе утро! <hr> Сегодня $day.";
        $background = "img/morning.jpg";
    } elseif ($time >= 11 && $time < 18) {
        $greeting = "Добрый день! <hr> Сегодня $day.";
        $background = "img/day.jpg";
    } elseif ($time >= 18 && $time < 23) {
        $greeting = "Добрый вечер! <hr> Сегодня $day.";
        $background = "img/evening.jpg";
    } else {
        $greeting = "Доброй ночи! <hr> Сегодня $day.";
        $background = "img/night.jpg";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.2</title>
</head>
<body style="background: url(<?= $background ?>) no-repeat; background-size: 100%; text-align: center">
    <h1 style="display: inline-block; margin: 400px auto 0; padding: 20px; background: #bed1ff; opacity: 0.8;
    border-radius:
    15px"><?= $greeting . $schedule ?></h1>
</body>
</html> 