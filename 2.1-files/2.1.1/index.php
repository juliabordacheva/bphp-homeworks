<?php
if (($handle = fopen('data.csv', 'r')) !== false) {
    $title = fgetcsv($handle, 1000, ',');
    // print_r($title) ;
    $name = $title[0];
    $art = $title[1];
    $price = $title[2];
    $json = [];

    

    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
    	
        $product = [
            $name => $data[0],
            $art => $data[1],
            $price => $data[2]
        ];

        foreach ($product as $key => $value) {
        	$detectEnc = mb_detect_encoding($value); 
        	if ($detectEnc !=='UTF-8') {
            $newEnc = iconv($detectEnc, "UTF-8");
	        }
	      $value = $newEnc;
        }
        array_push($json, $product);
    }
    fclose($handle);
}

// $detectEnc = mb_detect_encoding($title);
// print_r($title);

// foreach ($i as $data) {
// 	$detectEnc = mb_detect_encoding($i);

// 	if ($detectEnc !=='UTF-8') {
// 		$newEnc = iconv($detectEnc, "UTF-8");
// 	}
// 	$i = $newEnc;
// }

file_put_contents('data.json', json_encode($json, JSON_UNESCAPED_UNICODE));
