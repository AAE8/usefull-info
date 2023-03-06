<?php
// оператор if
// $mob = -1;
// if ($mob == 1) {
//     echo "Нужно прикупить еще 1 телефон";
// } elseif ($mob == 2) {
//     echo "У меня достаточно телефонов";
// } elseif ($mob == 3 || $mob > 1) {
//     echo "У меня много телефонов, продам 1";
// } else {
//     echo "Мне не повезло, у меня нет телефона";
// }

// $alpha = 'c';
// if ($alpha == 'b'):
// ?>
// <h1>Обычный HTML h1</h1>
 <?php
// elseif ($alpha == 'a'):
// ?>
// <h2>Обычный HTML h2</h2>
 <?php
// else: ?>
 <h3>Обычный HTML h3</h3>
 <?php
// endif;
?>

<?php

// echo $t = date("H");
// $times = 0;

// if ($t >= 6 & $t <= 12) {
//     $times = 1;
//     echo $times;
// } elseif ($t >= 13 & $t <= 17) {
//     $times = 2;
//     echo $times;
// } elseif ($t >= 18 & $t <= 23) {
//     $times = 3;
//     echo $times;
// } elseif ($t >= 24 || $t <= 5) {
//     $times = 4;
//     echo $times;
// }

// Условная конструкция определения суточного времени
date_default_timezone_set("Japan"); 
$t = date("H");

if ($t >= 6 & $t <= 12):
?>
<h3>This is morning</h3>
<?php
elseif ($t >= 13 & $t <= 17):
?>
<h3>This is day</h3>
<?php
elseif ($t >= 18 & $t <= 23):
?>
<h3>This is evening</h3>
<?php
elseif ($t >= 24 or $t <= 5):
?>
<h3>This is night</h3>
<?php
endif;
?>


// if($t == 1){
//     echo "morning";
// } elseif ($t == 2) {
//     echo "day";
// } elseif ($t == 3) {
//     echo "evening";
// } elseif ($t == 4) {
//     echo "night";
// }