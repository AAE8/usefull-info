<?php

// $someText = 'ok';
// switch ($someText) {
//     case 'value':
//         echo 'Выражение равно ok';
//     break;

//     case 'ok':
//         echo 'Выражение равно ok';
//     break;

//     default:
//         echo 'Выражение не равно ok';
//     break;
// } 

// $okey = 'value';

// if($okey == 'okey'){
//     echo 'Выражение равно okey-2';
// } elseif ($okey == "value") {
//     echo 'Выражение равно okey';
// } else {
//     echo 'Выражение не равно okey';
// }

// $num = 100;

// switch (true) {
// case ($num > 0 && $num <=50 ):
//         echo "true";
//         break;

// case ($num > 0 && $num <=500 ):
//         echo "true-2";
//         break;

//     default:
//     echo "false";
//     break;
// }

// Оператор goto 

$nums = 0;

begin:
$nums++;
echo "$nums<br>";
if($nums >= 22) goto finish;
goto begin;
finish:

?>