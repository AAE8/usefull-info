<?php
$arr = [10,20,30,21,54];
$average = function (array $arr){
  return array_sum($arr)/count($arr);
  // высчитываем среднее значение
};

echo "среднее значение: ". $average($arr)."<br>";

function factorial($a){
  if ($a === 0) return 1;
  return $a*factorial($a-1);
}

echo factorial(5);

?>