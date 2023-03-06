<?php
$file = "data.txt";
$str = file_get_contents($file);
//file_put_contents($file,"Ведьмак");
// Добавляем информацию в data.txt с помощью конкатенации
//file_put_contents($file,$str."Трисс");
// Добавляем информацию в data.txt с помощью флага
file_put_contents($file," Йенифер",FILE_APPEND);
echo $str;
?>