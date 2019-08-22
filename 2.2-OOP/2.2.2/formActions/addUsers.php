<?php
header('HTTP/1.1 200 OK');
header('Location: ../index.php');
require $_SERVER['DOCUMENT_ROOT'] . '/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/SystemConfig.php';
require 'classes/Singleton.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$testUser = new User();
$testUser->addUserFromForm();

$new_user = new User();
$new_user->addUserFromForm();


//header('HTTP/1.1 200 OK');
//header('Location: ../index.php');
//header('Location: http://' . $_SERVER['HTTP_HOST'] . '/2.2-OOP/2.2.2');