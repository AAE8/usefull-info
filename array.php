<?php

// Массивы
// присвоение индекса элементам массива
// ПЕРВЫЙ способ создания массива
$arr = array(1,2,3,'четыре',4 => 'four',5 => 'five'); // создание массива
//ВТОРОЙ способ создания массива
$arr2 = [11,22,33];

echo "$arr[3]<br>"; // вывод элемента массива

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
print_r($arr2);
echo '</pre>';

echo count($arr2); // последний эл. массива длина -1
echo $arr[count($arr) - 1];

// ТРЕТИЙ присвоение скалярной переменной массиву - еще один метод создания массива
$text = "php - 7";
$arr3 = (array) $text;
echo '<pre>';
print_r($arr3);
echo '</pre>';


// ARRAY
$arr_number = [1,3,54,55];
echo $arr_number['3'], "<br>";


$arr_user = ['name' => 'William', 'age' => 33]; // ассоциативный массив
echo $arr_user['age'], "<br>";

is_array($arr_user);
echo "<pre>";
print_r($arr_user);
echo "</pre>";



?>