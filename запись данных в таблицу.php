<?php
// запросы к базе данных MySQL при помощи PHP (PDO)

$connection = new PDO("mysql:host=localhost;dbname=my_site;charset=utf8","root","");

// запись данных
$query = "INSERT first_table(name,age) VALUE ('Klim',25)";
$count = $connection->exec($query);
$count = null; // явно обнулили экземпляр класса
echo $count;

?>