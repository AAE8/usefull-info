<?php 
// параметры функций 

// function getResult($var) {
//     $var = $var * 2;
//     return $var;
// }

// $new = 10;
// echo getResult($new)."<br>";
// echo $new;

// Разница двух функций в том что есть &
// & позволяет сохранять в переменной значение
// function getResult(&$var) {
//     $var = $var * 2;
//     return $var;
// }

// $new1 = 10;
// echo getResult($new1)."<br>";
// echo $new1;

// Необязательные параметры. Заданные значения
// function getResult($var1 = 2,$var2 = 3) {
//     $var = $var1 * $var2;
//     return $var;
// }

// echo getResult()."<br>"; // 8
// echo getResult(3)."<br>"; // 9
// echo getResult(5,5)."<br>"; // 25

// переменное или изменяемое количество параметров
// ... позволяет создать массив
// function myList(...$items) {
//     foreach ($items as $value) {
//         echo "$value<br>";
//     }
// }

// myList(1,2,'Три','Nick')."<br>";
// // передача массива в функцию
// $arr = ['PHP','Python','JS','HTML','CSS'];

// myList(...$arr)."<br>";


// task functions with ... and switch
//1.1.Создайте массив с именами ваших друзей
$names = ['Timur','Anton','Maks','Andrey'];
// 1.2.Создайте функцию, которая будет принимать аргументов массив и внутри каждый элемент массива будет выводить в браузер с приветствием и именем друга
function getNames(...$names){
    foreach($names as $v) {
        echo "Доброго времени суток $v<br>";
    }
}

getNames(...$names);

//1.3.Создайте функцию для вычисления математических операций, простых:
// На входе три параметра:
// первое число
// второе число
// математический символ (+, -, /, *)
// Внутри функции берем два числа и с ними делаем математическую операцию исходя из полученного символа
// Возвращаем результат наружу через return

function calc($a,$b,$c){
    switch ($c) {
        case '+':
            $res = $a + $b;
            return $res;
            break;

        case '-':
            $res = $a - $b;
            return $res;
            break;

        case '/':
            $res = $a / $b;
            return $res;
            break;

        case '*':
            $res = $a * $b;
            return $res;
            break;
    }
}

echo calc(4,20,'-');

?>