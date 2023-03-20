<?php
// методы аксессоры __set() __get()

class Accessor{
    private $one = [];

    public function __get($key){
        if(array_key_exists($key,$this->$one)){
            return $this->one[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value){
        $this->one[$key] = $value;
    }
}

$obj = new Accessor();

$obj->text = 'test text<br>';
$obj->name = 'Andrey<br>';
$obj->text = '222<br>';

echo '<pre>';
print_r($obj);
echo '</pre>';

class MyGroup{
    public function __construct(string $name, string $gender, int $age = 18){
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getGender(){
        return $this->gender;
    }

    public function __getAge(){
        return $this->age;
    }

    public function __set($key,$value){
        $this->age++;
        $this->$key = $value;
    }

    public $name;
    private $age;
    public $gender;
}

$darya = new MyGroup('Darya','female',26);
$darya->new_property1 = 'Добавляем новое свойство объекту, отрабатывает сеттер';
$darya->new_property2 = 'Еще раз добавляем новое свойство объекту, отрабатывает сеттер';
echo $darya->getName(). " ";
echo $darya->getGender(). " ";
echo $darya->__getAge();
?>