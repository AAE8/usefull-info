<?php
// запросы к базе данных MySQL при помощи PHP
require_once 'setting.php';

// подключение к MySQL
$connection = new mysqli($host, $user, $pass, $BD);
if($connection->connect_error) die("error_connection");

//запрос данных
$query = "SELECT * FROM my_site";
$result = $connection->query($query);
if(!$result) die("error_result");

$rows = $result->num_rows;

for($i = 0; $i < $rows; ++$i){
    $result->data_seek($i);
    echo 'Id: ' . $result->fetch_assoc()['id'] . " "; // or id, age
    echo 'Name: ' . $result->fetch_assoc()['name'] . "<br>";
}

$result->close();
$connection->close();


// echo '<pre>';
// print_r($result);
// echo '</pre>';
?>