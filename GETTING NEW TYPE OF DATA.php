<?php

// get new type
// неявное приведение типа
// $a = 5;
// echo gettype($a). "<br>";
// $a = $a*1.5;
// echo gettype($a). "- $a<br>";
// $a = $a. ' строка';
// echo gettype($a). " $a <br>"; // приведение типа к строке
// echo "3.14пи"*2 . "<br>";
// 

// Принудительное приведение типа
$b = 3;
$b = (string) $b;
echo gettype($b). "<br>";

$b = (float) $b;
echo gettype($b). "<br>";

$b = (bool) $b;
echo gettype($b). "<br>";
echo $b . "<br>";

$c = "33";
$c = (int)$c;
echo gettype($c). "<br>";
$c = (array) $c;
echo gettype($c). "<br>";
print_r($c);

?>