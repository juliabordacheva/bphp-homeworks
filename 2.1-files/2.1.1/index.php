<?php
if (($handle = fopen('data.csv', 'r')) !== false) {
    $title = fgetcsv($handle, 1000, ';');
    $name = $title[0];
    $art = $title[1];
    $price = $title[2];
    $json = [];
    while (($data = fgetcsv($handle, 1000, ';')) !== false) {
        $product = [
            $name => $data[0],
            $art => $data[1],
            $price => $data[2],
        ];
        array_push($json, $product);
    }
    fclose($handle);
}
file_put_contents('data.json', json_encode($json, JSON_UNESCAPED_UNICODE));
