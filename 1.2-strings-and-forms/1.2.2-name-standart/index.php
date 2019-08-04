<?php
function mb_ucfirst($string, $encoding) {
    $strlen = mb_strlen($string, $encoding);
    $firstChar = mb_substr($string, 0, 1, $encoding);
    $then = mb_substr($string, 1, $strlen - 1, $encoding);
    return mb_strtoupper($firstChar, $encoding) . $then;
}


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$fullName = mb_ucfirst(trim($lastName, ' '),'utf-8') . ' ' . mb_ucfirst(trim($firstName, ' '),'utf-8') . ' ' . mb_ucfirst(trim($middleName, ' '),'utf-8');
$fio = mb_ucfirst(mb_substr(trim($lastName, ' '), 0, 1),'utf-8') . mb_ucfirst(mb_substr(trim($firstName, ' '), 0, 1),'utf-8') . mb_ucfirst(mb_substr(trim($middleName, ' '), 0, 1),'utf-8');
$surnameAndInitials = mb_ucfirst(trim($lastName, ' '),'utf-8') . ' ' . mb_ucfirst(mb_substr(trim($firstName, ' '), 0, 1),'utf-8') . '.' . mb_ucfirst(mb_substr(trim($middleName, ' '), 0, 1),'utf-8') . '.' ;
echo "<div>Полное имя: '$fullName' </div>
<div>Фамилия и инициалы: '$surnameAndInitials'</div>
<div>Аббревиатура: '$fio'</div>";
?>