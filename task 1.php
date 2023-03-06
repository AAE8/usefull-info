<?php

$myName = "Adam";
$myAge = 25;
define ("MY_CITY", "Moscow");

$text = "Hello. My name is $myName, I`m $myAge years old. I`m from " . MY_CITY . "<br>";

echo $text;

define("COLORS", ['red', 'green', 'blue'])



?>

<p>Цвет настроения: <?= COLORS[0]  ?></p>