<?php

// ASSOCIATIVE ARRAY

// $fruit = ['яблоко' => 10,'банан' => 5,'киви' => 15,'манго' => 55];
// asort($fruit);

// foreach ($fruit as $key=>$value){
//   if ($value>10)
//   echo "$key количество: $value шт. <br>";
// }

// МНОГОМЕРНЫЙ МАССИВ

// $food = [
//   'fruits'=>['kiwi','banana','apple'],
//   'veggie'=>['tomato','potato','pea','something else']
// ];

// // echo$food['fruits']['2'],"<br>";
// // echo count($food,1);

// foreach($food as $k=>$v){
//   echo "$k: <br>";
//   foreach ($v as $key=>$value) {
//     echo "$key: $value<br>";
//   }
// }

// МАССИВ С ФУНКЦИЕЙ RANGE

// $arr = range(1,5);
// $arr2 = range(1,10,2);

// foreach($arr as $v){
//   echo $v, " ";
// }

// echo "<br>";

// foreach($arr2 as $v){
//   echo $v, " ";
// }

// // СЛИЯНИЕ МАССИВОВ

// $sum_arr = array_merge($arr,$arr2);
// echo "<br>";
// foreach ($sum_arr as $v){
//   echo $v, " ";
// }

// Функция определения пересечения между двумя массивами
// echo "<br>";
// print_r(array_intersect($arr,$arr2));
// echo "<br>";
// print_r(array_diff($arr,$arr2));
// echo "<br>";
// print_r(array_diff($arr2,$arr));

// ПРЕОБРАЗОВАНИЕ МАССИВА

// $str = 'ПН ВТ СР ЧТ ПТ СБ ВС';
// $arr = explode(' ',$str); 
// print_r($arr);

$color = ['красный', 'зеленый', 'синий'];
list($red,$green,$blue)=$color;
echo "$red $green $blue";
$str = implode(" ", $color);
echo $str;

?>