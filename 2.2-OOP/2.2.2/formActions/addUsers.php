<?php
include '../autoload.php';
include '../config/SystemConfig.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$testUser = new User($username, $password, $email, $rating);
$testUser->addUserFromForm();
header('HTTP/1.1 200 OK');
header('Location: ../index.php');