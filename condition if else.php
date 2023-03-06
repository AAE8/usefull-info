<?php

$rain = 5;
if($rain){
  echo "Идет дождь<br>";
}

if($rain>3){
  echo "Ливень<br>";
} else {
  echo "Погода ясная<br>";
}

echo $rain ? "Идет дождь<br>" : "Погода ясная<br>";

?>