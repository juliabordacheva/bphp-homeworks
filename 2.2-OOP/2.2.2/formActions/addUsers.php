<?php 
include '../autoload.php';
include '../config/SystemConfig.php';
include '../classes/JsonFileAccessModel.php';


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$rating = $_POST['rating'];

var_dump($_POST);

$testUser = new User($username, $password, $email, $rating);

var_dump($testUser);

$testUser->addUserFromForm();


header('HTTP/1.1 200 OK');
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/2.2-OOP/2.2.2');

//header('Location: http://' . $_SERVER['HTTP_HOST'] . '/bphp-homeworks-master/2.2-OOP/2.2.2');
 ?>