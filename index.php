<?php
// анонимные функции

$some = function (...$arr1){
    foreach($arr1 as $val){
        echo $val . "<br>";
    }
}; // в отличии от обычной в анонимной функции здесь нужно ставить ;

$some(12,23,44,565,77);

function sum(...$arr){
	$sum = 0;
	for($i=0;$i<=count($arr)-1;$i++){
		$sum += $arr[$i];
	}
	return $sum;
}

echo sum(1,2,3,4,5,6,7,8,8)

?>