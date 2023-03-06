<?php

// ELSEIF

$price = 30;

if($price >= 100){
  echo "Скидка 30 %<br>";
}
elseif ($price >= 50){
  echo "Скидка 15 %<br>";
}
else{
  echo "Скидка 10 %<br>";
}

$discount = $price >= 100 ? 30 : ($price >= 50 ? 15:10);
echo $discount," %<br>";

$x = 10;
$y = 15;

if($x > 5 && $y > 20) {
  echo $x + $y;
}


?>