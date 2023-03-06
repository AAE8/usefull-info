<?php
// абсолютный, относительный пути
// относительный
//require_once 'lol/second.php';
// абсолютный
// require_once 'E:/OpenServer/domains/localhost/lol/third.php';
// require_once __DIR__ . '/lol/second.php';

// echo "Это файл index.php";
// echo __DIR__;

// Константы класса

class ConstantClass {
    const NAME = "const";
}
// вывод константы
echo ConstantClass::NAME;
// проверка есть или нет константа
echo defined('ConstantClass::NAME');

if(defined('ConstantClass::NAME')){
    echo 'Константа определена <br>';
} else {
    echo 'Константа не определена <br>';
}

?>