<?php
// STRING

$name = "Alex";
$name2 = "Алекс";
echo gettype($name) . "<br>";
echo is_string($name), "<br>";

$age = 3;
// var_dump - функция выводящая информацию о переменной

echo var_dump($name) . "<br>";
echo var_dump($name2) . "<br>";

if (is_string($age))echo "$name - это строка<br>";

?>