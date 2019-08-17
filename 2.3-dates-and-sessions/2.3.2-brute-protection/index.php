<?php
$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000'
];
function login($users) {

    $login = isset($_POST['login']) ? $_POST['login'] : '';

    if (array_key_exists($login, $users)) {
        if ($users[$_POST['login']] == $_POST['password']) {
            echo 'Вы успешно вошли';
            return true;
        }
    }
    echo 'Неверный логин или пароль';
    return false;
}
function check($users) {
    if (login($users) === true) {
        exit;
    } else {
        $_SESSION['login'] = (isset($_POST['login']));
        $_SESSION['time'] = time();
        $_SESSION['counter'] = 1;
        return;
    }
}
function logFile() {
    $file = 'data.txt';
    $userFile = fopen($file, 'a');
    $date = " " . "Попытка входа" . (isset($_POST['login'])) . ': ' . date('d.m.Y H:i:s') . "\n";
    fwrite($userFile, $date);
    fclose($userFile);
}
function countOfTry($users) {
    session_set_cookie_params(1800);
    session_start();

    if (count($_SESSION) == 0) {
        check($users);
        return NULL;
    }

    if ($_SESSION['login'] === (isset($_POST['login']))) {

        $_SESSION['counter']++;

        if (((time() - $_SESSION['time']) <= 5) && ($_SESSION['counter'] === 2)) {

            echo 'Слишком много попыток, попробуйте еще раз через минуту';
            logFile();

        } elseif ((time() - $_SESSION['time']) < 60) {
            $_SESSION['counter']++;
            if ($_SESSION['counter'] > 3) {
                $_SESSION['counter'] = 0;
                echo 'Слишком много попыток, попробуйте еще раз через минуту';
                logFile();
            } else {
                echo 'Неверный логин или пароль';
                return false;
            }

        } elseif ((time() - $_SESSION['time']) > 60) {
            $_SESSION = [];
            check($users);
            return NULL;
        }

    } else {
        check($users);
        return NULL;
    }
}

countOfTry($users);