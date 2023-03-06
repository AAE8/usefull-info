<?php

// Цикл while
// $i = 10;
// while($i <= 20){ // true, false
//     echo "$i <br>";
//     $i++;
// }

// while (true) {
//     $i++;
//     // здесь будет условие выхода из цикла
//     if ($i > 20) break;
//     echo "$i <br>";
// }

// while (--$i) { // 10,9,6 и т.д. = true, 0 = false
//     echo "$i <br>";
// }

// while ($i--) {
//     echo "$i <br>";
// }

// $i = 0;

// while($i <= 50){
//     echo "$i <br>";
//     $i++;
//     if ($i % 2) {
//         echo "Число четное";
//     } else {
//         echo "Число нечетное";
//     }
// }

// while(true) {
//     $i++;
//     if($i > 50) break;
//     echo "$i <br>";
// }

$i = 50;

while(--$i) {
    echo "$i <br>";
}


?>