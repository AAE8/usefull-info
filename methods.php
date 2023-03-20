<?php
// Методы
// $this относится к текущему объекту (экземпляру объекта),
// self относится к текущему классу,
// Класс - это проект объекта. Таким образом, вы определяете класс, но вы строите объекты

class Hi {
    public function hello () {
        return 'Hello everybody';
    }

    public function bye () {
        return 'Bye';
    }  
}

$obj = new Hi;

echo $obj->hello() . "<br>";
echo $obj->bye() . "<br>";
 
// var_dump($obj);

class Family {
    private $boy;
    private $girl;

    public function setNameBoy($boy) {
        $this->boy = $boy;
    }

    public function setNameGirl($girl) {
        $this->girl = $girl;
    }
    public function getNameBoy(){
        return $this->boy;
    }
    public function getNameGirl(){
        return $this->boy;
    }

    public function family(){
        return $this->getNameGirl() . " и " . $this->getNameBoy() . " семья!";
    }
}

$family = new Family;

$family->setNameBoy('Ник');
$family->setNameGirl('Нина');

echo $family->family();

// task

class Lesson
{
    private $a;
    private $b;

    public function Numbers($num1, $num2)
    {
        return $this->a = $num1 + $this->b = $num2;

    }

    public function Numbers2($num1, $num2)
    {
        return $this->a = $num1 - $this->b = $num2;

    }

    public function Numbers3($num1, $num2)
    {
        return $this->a = $num1 / $this->b = $num2;

    }

    public function Numbers4($num1, $num2)
    {
        return $this->a = $num1 * $this->b = $num2;

    }
}

$test = new Lesson;
echo $test->Numbers(3, 5) . "<br>";
echo $test->Numbers2(3, 5) . "<br>";
echo $test->Numbers3(3, 5) . "<br>";
echo $test->Numbers4(3, 5) . "<br>";
?>