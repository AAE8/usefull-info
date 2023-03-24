<?php
// подготовленные запросы

$connection = new PDO("mysql:host=localhost;dbname=my_site;charset=utf8","root","");

// запись данных
// $query = "INSERT first_table(name,age) VALUE ('Klim',25)";
// $count = $connection->exec($query);
// $count = null; // явно обнулили экземпляр класса
// echo $count;

$name = 'Olga';
$age = 22;

$param = [
    'n' => $name,
    'age' => $age
];

// подготовка запроса/вставка плейсхолдера :n, :age
$sql = "INSERT first_table(name,age) VALUE (:n, :age)";
$query = $connection->prepare($sql);


// $query->execute(['n'=>$name, 'age'=>$age]);
$query->execute($param);


print_r(PDO::getAvailableDrivers());

?>