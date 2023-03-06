<?php

// функцию время можно использовать для определения времени работы скрипта
$start = microtime(true);
$c = 1;
for($i=0;$i<=100000000;$i++){
  $c *=$i;
}
$end = microtime(true);
$sec = $end - $start;
echo "Время работы скрипта: $sec<br>";

echo checkdate(12,4,1999);
?>