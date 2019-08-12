

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
  <style type="text/css">

    form {
      margin-left:200px;
    }
    input {
		display: block;
		margin-top: 10px;
	}
	button {
		margin-top: 10px;
	}
  </style>
</head>
<body>
<form  enctype="multipart/form-data" action="formActions/addUser.php" method="post">
   <h3>Создать пользователя</h3>
  <label for="username">Имя:
  <input type="text" name="name" placeholder="Имя" required> </label>

  <label for="parol">Пароль:
  <input type="text" name="parol" placeholder="Пароль" required> </label>

  <label for="email">Электронная почта:
  <input type="text" name="email" placeholder="Электронная почта" required> </label>

  <label for="rating">Рейтинг:
  <input type="text" name="rating" placeholder="Рейтинг" required> </label>


  <button type="submit">Добавить пользователя</button>
</form>
</body>
</html>

<?php
include 'autoload.php';
include 'config/SystemConfig.php';
include 'classes/JsonFileAccessModel.php';
$jsonObj = new JsonFileAccessModel('users');
$json = $jsonObj->readJson();

// displaySortedList();
?>