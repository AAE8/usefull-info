<?php
// замыкания 
// замыкания это по сути замена глобальных переменных, значения которых нельзя поменять

$mess = 'текст до момента создания функции <br>';

$test = function (array $some) use ($mess) {
    if (isset($some) && count($some) > 0) {
        echo $mess;
        foreach($some as $li){
            echo $li . "<br>";
        }
    }
};

$test([]);
$some[] = 'типа текст';
$test($some);
// изменение окружения
$mess = 'измененный текст <br>';
$mess = false;

$some = [12, 32, 43, 53];
$test($some);

// задания не делал. может сделаем сейчас? ;)

?>