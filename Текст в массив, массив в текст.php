<?php
$file = "data.txt";
// Текстовый файл передаем в массив
// $arr = file('num.txt');
// print_r($arr);
// Массив в текстовый файл
$arr = [1,2,3,4,5,'5'];
//PHP_EOL - переход на другую строку в Linux, Windows
file_put_contents('arr.txt',implode(PHP_EOL,$arr));
 
?>