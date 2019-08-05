<?php
function generate($rows, $placesPerRow, $avaliableCount) {
    if ($rows * $placesPerRow > $avaliableCount) {
        return false;
    }
    $map = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $placesPerRow; $j++) {
            $map[$i][$j] = false;
        }
    }
    return $map;
}
function reserve(&$map, $row, $place) {
    if ($map[$row-1][$place-1] === false) {
        $map[$row-1][$place-1] = true;
        return true;
    }
}

$chairs = 50;
$map = generate(5, 8, $chairs);
$requireRow = 1;
$requirePlace = 2;
$reverve = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reverve);




function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place". '<br>';
    } else {
        echo "Что-то пошло не так=( Бронь не удалась". '<br>';
    }
}

function checkPlacesOfMap($map, $requireNearPlaces) {
    
    for ($i=0; $i < count($map); $i++) {
        $place = 0;
        for ($j=0; $j < count($map[0]); $j++) {
            if ($j > count($map[0]) - $requireNearPlaces + 1) {
                continue;
            }

            if ($map[$i][$j] == 0) {
                $place = $place + 1;
                if ($place == $requireNearPlaces) {
                    echo 'Можно забронировать места -  ряд: '. ($i + 1) . ' места с: ' . ($j + 1 - $requireNearPlaces + 1). ' по: ' . ($j + 1) . '<br></br>';
                    continue;
                }
            } else
            
            $place = 0;
            
        }
    }
}
checkPlacesOfMap($map, 2);
?>