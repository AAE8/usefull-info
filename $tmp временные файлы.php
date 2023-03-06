<?php
// работа с временными файлами
// файл не создается
$file = "data.txt";
$tmp = tmpfile();
fwrite($tmp,'lol');
fseek($tmp,0);
echo fread($tmp,3);
fclose($tmp);
?>