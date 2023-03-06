<?php
// true позволяет вывести на экран многомерный массив
$arr = parse_ini_file('config.ini', true);
print_r($arr);
echo $arr['Section']['lang'];
?>