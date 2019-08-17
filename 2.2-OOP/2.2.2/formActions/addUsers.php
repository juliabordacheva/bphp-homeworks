<?php 
include 'autoload.php';
include 'config/SystemConfig.php';
include 'classes/JsonFileAccessModel.php';

$addUser = new User();

$addUser->addUserFromForm();

 

 ?>