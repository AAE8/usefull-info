<?php

// RESOURCE

// $book = fopen('dir/noob.txt', 'r');
// echo is_resource($book), "<br>";

// Object
$mysql = new Mysqli ('localhost','root','','mysql');
echo gettype($mysql), "<br>";
var_dump($mysql);

?>