<?php
// Функция определения времени по Гриничу
function GMT($time){
  $offset = date('Z',$time);
  return $time-$offset;
}
echo time(),"<br>";
echo GMT(time()),"<br>";
echo date("h:i:s",GMT(time())),"<br>";

// Функция определения времени по Гриничу и с учетом часовых поясов

function GMT_my($offset){
  $result = (GMT(time())+($offset*3600));
  $time = date('h:i:s', $result);
  return $time;
}

echo "Время в Нью-Йорке GMT-4: ", GMT_my(3);

?>