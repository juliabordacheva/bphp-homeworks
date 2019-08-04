<?php

echo 'Первое задание <br>';
$protocol = 'https://github.com/Stegur/bphp-1/tree/master/1.2-strings-and-forms/1.2.3-additional';
if (substr($protocol, 0, 8) === 'https://') {
        echo 'substr - Да <br>';
	} else {
	    echo 'substr - Нет <br>';
	}

	
if (strpos($protocol, 'https://') !== false) {
	    echo 'strpos - Да <br>';
	} else {
	    echo 'strpos - Нет <br>';
	}



echo '<br>Второе задание <br>';
$inputDate = '05-29-1993';
$mnth= substr($inputDate,0, 2);
$day = substr($inputDate,3, 2);
$year = substr($inputDate,6, 4);
$outputDate = $day . '.' . $mnth . '.' . $year;
echo $outputDate . '<br>';





echo '<br>Третье задание <br>';
$inputPrice = '1057916';
if (strlen($inputPrice) > 6 ) {
	    $firstIteration = substr_replace($inputPrice, ' ', -3, 0);
	    $outputPrice = substr_replace($firstIteration, ' ', -7, 0);
	} else {
	    $outputPrice = substr_replace($inputPrice, ' ', -3, 0);
	}
echo $outputPrice . ' руб.<br>';