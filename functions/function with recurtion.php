<?php
// рекурсивные функции

function recur($num) {
    // если параметр $num меньше 10, продолжаем рекурсию
    if ($num >= 10) {
        // уменьшать значение параметра $num и его выводим в браузер
        echo ($num--) . "<br>";
        // производим рекурсивный вызов функции
        recur($num);
    } else return; // либо прерываем программу exit();
}

//recur(15);

// факториал - произведение всех целых чисел, меньших или равных данному числу.
function factorial($num){
    if($num <= 1) return 1;
    // здесь у нас происходит повторный вызов функции
    return $num * factorial($num - 1);
}

echo factorial(6) . "<br>";

function factorial2($num){
    $result = 1;
    for ($i=1;$i<=$num;$i++) {
        $result *= $i;
    }
    return $result;
}

echo factorial2(4);

// task with recurtion
// 1.1. Написать рекурсию по примеру занятия, где
// Принимаем число, как параметр
// если оно больше 100 отнимаем каждый раз 5 и выводим через echo
// Запустить и проверить на правильность

function rec($num) {
    if ($num > 100) {
        echo ($num-=5) . "<br>";
        rec($num);
    } else return;
}

rec(200);

//1.2. Создайте многомерный массив или используйте с прошлых занятий готовый
// Напишите рекурсивную функцию обхода этого массива с выводом его элементов

$massiv = [
	"Friends" => ["Petya", "Lena", "Yura"],
	"Comrades" => ["Anya", "Katya", "Pasha"],
	"Relatives" => ["Sasha", "Vasya", "Zhora"]
];
function recarray($arr) {
	foreach($arr as $key => $value) {
		if(!is_array($value) && !is_array($value)){ 
            echo $key,$value . "<br>";
        } else recarray($value);
 }
}
recarray($massiv);

?>