<?php
// ассоциативные и индексные массивы 

$arr = ['name' => 'Адам', 'age' => 25];
$arr2 = ['Маша', 25];

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// echo "<pre>";
// print_r($arr2);
// echo "</pre>";

// echo $arr['age'];
// echo $arr2[0];

// многомерные массивы

$people = [
    'Ivan' => ['age' => 21, 'weight' => 63],
    'Adam' => ['age' => 25, 'weight' => 75]
];

echo "<pre>";
print_r($people);
echo "</pre>";

echo "<pre>";
print_r($people['Ivan']);
echo "</pre>"; 

echo $people['Ivan']['weight']."<br>";

// интерполяция элемента массива в строку
$arr3[0] = 11;
echo "Сейчас у нас $arr3[0] утра"."<br>";

$arr4['time'] = 10;
echo "Сейчас у нас $arr4[time] утра"."<br>";

echo "Иван имеет вес в {$people['Ivan']['weight']} кг.";

//task
$array1 = [1,2,3,4,5,6,7,8,9,10];
$array1 = ['one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5,'six'=>6,'seven'=>7,'eight'=>8,'nine'=>9,'ten'=>10];

$time = [
    'Monthes' => ['January','February','March','April','May','June','July','August','Semtember','October','November','December'],
    'Days' => ['Monday' => 'Monday','Tuesday' => 'Tuesday','Wednessday' => 'Wednessday','Thursday' => 'Thursday','Friday' => 'Friday','Saturday' => 'Saturday','Sunday' => 'Sunday']
];

echo "<pre>";
echo print_r($time);
echo "</pre>";

echo "Я должен работать программистом уже в {$time['Monthes']['4']}<br>";
echo "Мне следует изучить много тем из PHP к {$time['Days']['Monday']}";


?>