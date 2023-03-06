<?php
// клонирование объектов
class SomePeople {
    public $age; // public используется для задания области видимости переменных
    public $name;
    public static $people = 1; // статическая переменная
}

// так нужно обращаться к статической переменной
//echo SomePeople::$people;

$tim = new SomePeople();
$tim->age = 33;
echo $tim->age;

$tom = clone $tim;
echo $tom->age;

// константы
// команда позволяющая отменить регистрозависимость третим параметром добавив true
define('PI', 3.14, false);
define('number', 11);

echo PI;

echo number;

// проверка константы

// if(defined('PI')) {
//     echo "Константа есть";
// }else{
//     echo "Константы нет";
// }

echo defined('PI');

/*
__LINE__ // какая текущая строка в файле
__FILE__ // получить имя, путь
__FUNCTION__ // имя функции
__CLASS__ // имя метода
__METHOD__ // имя метода
__DIR__ // текущий путь
PHP_VERSION // какая версия 
OS_VERSION // версия операционной системы
PHP_EOL // символ конца строки для виндовс \n для linux \r\n
*/

echo "File name " . __FILE__ . "<br>";

?>