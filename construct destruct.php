<?php
// Конструктор __construct() это метод, который выполнится как только мы создадим экземпляр класса
class Constr{
    private $y;
    private $x;

    public function __construct($x = 0){
        echo "отработал конструктор (метод)";
        $this->y = 22;
        $this->x = $x;
    }

    public function __destruct(){
        echo "отработал деструктор (метод)<br>";
        $this->y = 0;
    }

    public function getY(){
        return $this->y;
    }

    public function getX(){
        return $this->x;
    }
}

$obj = new Constr();

echo $obj->getY();
echo $obj->getX();


// Деструктор __destruct() это метод, который выполнится как только мы уничтожим экземпляр класса

// Деструктор очищает данные в памяти, которые предоставил конструктор

// task Создайте класс Basket (корзина)
// добавьте следующие свойства:
// хлеб
// молоко
// сыр
// яйца
// картофель и т.д.
// Создайте конструктор, который будет присваивать каждому свойству (переменной) количество товара = 1
// Создайте метод, который будут считывать общее количество товара и выводить на экран
// В деструкторе удалите все продукты (присвоив свойствам значение = 0.

class Basket{
    private $bread;
    private $milk;
    private $cheese;
    private $eggs;
    private $potatoes;

    public function __construct($bread = 1,$milk = 1, $cheese = 1, $eggs = 1, $potatoes = 1){
        $this->bread = $bread;
        $this->milk = $milk;
        $this->cheese = $cheese;
        $this->eggs = $eggs;
        $this->potatoes = $potatoes;
    }

    public function getBasket(){
        foreach($this as $key=>$value){
            echo "$key в количестве = $value\n";
        }
    }

    public function sumAll()
    {
        echo "Oбщее количество товара: ";
        echo $this->bread + $this->milk + $this->cheese + $this->eggs + $this->potatoes;
    }
    
    public function __destcruct(){
        foreach($this as $key=>$value)
            $this->$key = 0;

        echo "Отработал деструктор\n";
        self::getValue();
    }

}

$obj = new Basket();
$obj->getBasket();
$obj->sumAll();

// длинный способ

class Basket2 {
    
    private $bread;
    private $milk;
    private $cheese;
    private $egg;
    private $potato;



    public function __construct()
    {
        $this->bread = 1;
        $this->milk = 1;
        $this->cheese = 1;
        $this->egg = 1;
        $this->potato = 1;
    }



    public function getBread()
    {
        return $this->bread;
    }

    public function getMilk()
    {
        return $this->milk;
    }

    public function getCheese()
    {
        return $this->cheese;
    }

    public function getEgg()
    {
        return $this->egg;
    }

    public function getPotato()
    {
        return $this->potato;
    }

    public function sumAll()
    {
        echo "Oбщее количество товара: ";
        echo $this->getBread() + $this->getMilk() + $this->getCheese() + $this->getEgg() + $this->getPotato();
    }


    public function __destruct()
    {
        $this->bread = 0;
        $this->milk = 0;
        $this->cheese = 0;
        $this->egg = 0;
        $this->potato = 0;
    }
}

$basket = new Basket2();
$basket->sumAll();

?>