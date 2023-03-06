<?php

// FOREACH

// $week = [1=>'пн','вт','ср','чт','пт','сб','вс',];

// foreach ($week as $key=>$day) {
//   echo "$key: $day<br>";
// }

$console = [
  0=>['name'=>'xbox', 'price'=>45590],
  1=>['name'=>'ps5', 'price'=>49990]
];

foreach ($console as $value){
  echo "консоль: $value[name] цена: $value[price]<br>";
}

// Массивы

$arr = [1,2,3];

// list($one,$two,$three) = $arr;

// echo print_r($arr). "<br>";

// echo $two . "<br>";

// echo $three;

// Обход массива
for ($i=0;$i<count($arr);$i++){
    echo $arr[$i] . "<br>";
}

$Andrei = [
    'name' => 'Andrei',
    'age' => 31,
    'weight' => 73
];

// foreach ($Andrei as $key => $value) {
//     echo $key . " " . $value . "<br>";
// }

foreach ($Andrei as $value) {
    echo $value . "<br>";
}

?>