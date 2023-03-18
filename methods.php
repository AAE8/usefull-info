<?php
// Методы

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
?>