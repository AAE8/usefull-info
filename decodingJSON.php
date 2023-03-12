<?php
// $open = fopen("json.txt",'w');

// $unser = json_decode($open, true);

// $imp = implode($unser);

// $read = fread($open,filesize($imp));

// echo $read;

// fclose($open);

$text = file('index.php');

// $array = json_decode($text, true);

// var_dump($text);

$json = json_decode($text);

foreach($json as $k=>$v) {
    print_r($k, $v . '<br>');
}

?>