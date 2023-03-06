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

// INT

$num = 33;
echo PHP_INT_MAX, "<br>"; 
$num1 = 0b1010; // запись числа в двоичной системе
$num2 = 012; // запись числа в восьмиричной системе
$num3 = 0xA; // запись числа в шестнадцатиричной системе
echo $num1, "<br>";
echo gettype($num1) . "<br>";
echo var_dump($num) . "<br>";
is_int($num);

// FLOAT

$a = 3.5; // float
$b = 5E2; // float равное 5 * 10^2
$c = 5E-2; // float равное 5 * 10^-2степени = 0.05
echo "a = $a b = $b c = $c <br>";

if (is_float($a)) echo "3.5 - число с плавающей точкой<br>";

?>