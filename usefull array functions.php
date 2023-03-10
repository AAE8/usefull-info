<?php
// Массивы и полезные возможности
// Слияние массивов

// если одинаковые индексы то слева направо они заменяются
// $arr1 = ['my','text'];
// $arr2 = [2 => 'our', 3 => 'some'];

// $arr1 = ['my', 'text'];
// $arr2 = ['our', 'some', 'text2'];
// $sum = $arr1 + $arr2;


// но можно произвести слияние без замещения элементов с одинаковыми элементами

$arr1 = ['my', 'text'];
$arr2 = ['our', 'some', 'text2'];
$sum = array_merge($arr1,$arr2);

echo "<pre>";
print_r($sum);
echo "</pre>";

// сравнение массивов

$a1 = [1,3,5,7,9];
$a2 = [1,3,5,7,9,'10'];
$a3 = [1,3,5,7];
$a4 = [1,3,4,7,9];

if ($a1 == $a2) {
    echo "Массивы равны";
} else {
    echo "Массивы не равны";
}

if ($a1 == $a3) {
    echo "Массивы равны";
} else {
    echo "Массивы не равны";
}

// ===
$arr11 = [0 => 1, 1 => 2];
$arr22 = [0 => 1, 1 => '2'];


if ($arr11 === $arr22) {
    echo "Массивы равны<br>";
} else {
    echo "Массивы не равны";
}

// существование массива
for ($i=0; $i <= 6; $i++) {
    if (isset($arr11[$i])) {
        echo "Элемент массива \$arr11[$i] существует<br>";
    } else {
        echo "Элемент массива \$arr11[$i] не существует<br>";
    }
}

// is_array()
if (is_array($arr22)) {
    echo "Переменная \$arr22 является массивом<br>";
} else {
    echo "Переменная \$arr22 не является массивом<br>";
}

// in_array() работает как ==. Чтобы работало как === нужно дописать true
// ПОДВОДНЫЙ КАМЕНЬ. пишет что цифра 10 существует, но это строка
if (in_array(10,$a2,true)) {
    echo "цифра 10 существует";
} else {
    echo "цифра 10 не существует";
}

// функция которая ищет ключ а не значение как in_array()
//array_key_exists(key, array)

// удаление всего массива
// unset($a2);
// print_r($a2);

// удаление элемента массива

unset($a2[2]);
print_r($a2);


?>