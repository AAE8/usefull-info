<?php
// Классы и объекты
// public, private, protected - спецификаторы доступа
// public - до переменной можно дотянуться извне и внутри класса
// private - только внутри класса
// protected - используется при наследовании

class somePeople {
    public $age; // public используется для задания области видимости переменных
    public $name;
}

$nick = new somePeople;
$nick->age = 30;
$nick->name = "Nick";

//echo $nick->name;
//unset($nick);
//$nick = 18; // с этого момента nick это не экземпляр класса а обычная переменная
//echo $nick->name;
//$dasha = new SomePeople(); 

class Location {
    public $x;
    private $y;
    public $z;
}

$loc = new Location();
$loc->x = 22.22;
$loc->z = 42.42;

class People{
    public $age;
    public $name;
}

$adam = new People();
$adam->name = "Adam";
echo $adam->name;
$adam->age = 30;
echo $adam->age;

class Animals{
    public $name;
    public $color;
}

$dog = new Animals();
$dog->name = "dog";
echo $dog->name;
$dog->color = "gray";
echo $dog->color;

class Planets{
    public $name;
    private $color;
}
?>