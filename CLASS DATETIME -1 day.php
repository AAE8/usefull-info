<?php

$date = new DateTime('2023-2-23');
// обращаемся к методу класса
$date->modify('-1 day');
echo $date->format('d.m.y');

?>