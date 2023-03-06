<?php
// 1.1.
$arr = [
  ['name'=>'iphone','price'=> 30000 / 100 * 30 + 30000],
  ['name'=>'macbook','price'=>130000 / 100 * 30 + 130000],
  ['name'=>'macpro','price'=>430000 / 100 * 30 + 430000]
];

// 1.2.

  foreach($arr as $value){
    echo "Цена: $value[name] = $value[price] р.<br>";
  }

// 2.

$arr2 = range(1,100);
print_r($arr2). "<br>";
echo "Сумма = ". array_sum($arr2). "<br>";

$arr3 = range('a','z');
print_r($arr3). "<br>";
$arr4 = implode(" ", $arr3);
print_r($arr4). "<br>";
?>