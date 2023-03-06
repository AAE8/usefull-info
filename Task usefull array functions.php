<?php
// Task usefull array functions
//1.2. Создайте массив на 6 элементов. Выведите случайный элемент массива используя функцию rand()
$arr = [1,2,3,4,5,6];
$rand_keys = array_rand($arr,1);
print_r($rand_keys);
//1.3. Создайте массив с числами от 0 до 20. Проверяя каждое число, если оно без остатка от деления на 2, тогда его добавляем в новый массив
$arr2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

$res = array_filter (
    $arr2,
    function($el) { return ($el % 2 == 0); }
);

print_r($res);
//1.4. *Создайте текстовый файл с названиями месяцев. В документации РНР найдите функцию file(), изучите приемы ее использования и создайте массив с названиями месяцев из содержимого текстового файла.  

$array = file("info.txt");
print_r($array);
//1.5. **Создайте массив со случайным количеством элементов от 5 до 10, элементы которого принимают случайное значение от 0 до 100. Отсортируйте элементы массива в порядке от наименьших к наибольшим значениям.

for($i=0;$i<rand(5,10);$i++) {
    $array5[$i] = rand(0,100);
}
sort($array5);

print_r($array5);

?>