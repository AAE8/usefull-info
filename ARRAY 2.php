<?php

// Arrays
$month = [1=>"январь","февраль","март","апрель"];
echo $month['4'];
$month['5'] = "Май";
$month[]="Июнь";
// unset($month['6']);
echo"<pre>";
print_r($month);
echo"</pre>";

$num = [12,4,3,5,12,1,3,16];
sort($num); // но ключи не сохранятся
$num2 = array_unique($num);
// удаляем повторяющиеся цифры и для вывода помещаем новый массив в другую переменную
foreach($num as $value){
  echo $value, "<br>";
}

echo "сумма = ". array_sum($num)."<br>";
echo "произведение = ". array_product($num)."<br>";
echo "кол-во элементов = ". count($num)."<br>";
echo "поиск числа = ". in_array("12",$num)."<br>";

echo"<pre>";
//print_r(array_chunk($num,2)); // нужно поместить в переменную
//print_r(array_slice($num,0,3));
// array_splice($num,0,3,['a','b','c']); // вот сейчас меняется исходный массив
print_r($num);
echo "</pre>";

?>