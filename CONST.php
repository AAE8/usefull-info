<?php

define ("DB_LOGIN", "root");
echo DB_LOGIN . "<br>";

define ('COLORS', [0=>'red', 'green', 'blue']);
echo COLORS[0] . "<br>";
echo defined('COLORS') . "<br>";

// Встроенные константы

echo __DIR__, "<br>";
echo __FILE__, "<br>";
echo __LINE__, "<br>";
echo PHP_VERSION, "<br>";
error_reporting(E_ALL);

?>