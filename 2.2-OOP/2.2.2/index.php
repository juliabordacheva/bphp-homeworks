<?php
require_once 'autoload.php';
require_once 'config/SystemConfig.php';


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
require_once 'form.html';

$users = new Users;
$users->displaySortedList();
?>
</body>
</html>