<?php

class SomePeople {
    public $age; // public используется для задания области видимости переменных
    public $name;
    public static $people = 1; // статическая переменная
}

// так нужно обращаться к статической переменной
//echo SomePeople::$people;

$tim = new SomePeople();
$tim->age = 33;
echo $tim->age;

$bob = $tim;
$tim->age = 35;
echo $bob->age;

$fir = $sec = 3;
$fir = 4;

/*
echo $fir;
echo "<br>";
echo $sec;
*/

class Animal {
    public static $class = "Млекопитающее";
    public static $type = "monkey";
    public $name = "name";
    public $color = "black";
    public $speed = "X км/ч.";
    public $middleAge = "X years old";
}

$gorilla = new Animal();
echo Animal::$class . "<br>";
echo Animal::$type . "<br>";
echo $gorilla->name = "gorilla" . "<br>";
echo $gorilla->color . "<br>";
echo $gorilla->speed = 15 . " км/ч<br>";
echo $gorilla->middleAge = 20 . " years old<br>";

$gorilla = $шимпанзе = new Animal();
echo Animal::$class . "<br>";
echo Animal::$type . "<br>";
echo $gorilla->name = "шимпанзе" . "<br>";
echo $gorilla->color = "grey" . "<br>";
echo $gorilla->speed = 10 . " км/ч<br>";
echo $gorilla->middleAge = 18 . " years old<br>";

$орангутан = new Animal();
echo Animal::$class . "<br>";
echo Animal::$type . "<br>";
echo $gorilla->name = "орангутан" . "<br>";
echo $gorilla->color = "светло-коричневый" . "<br>";
echo $gorilla->speed = 10 . " км/ч<br>";
echo $gorilla->middleAge = 30 . " years old<br>";


?>