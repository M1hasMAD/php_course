<?php
class Person {
    public $name = 'Mikhail';
    public $age = 20;

    function saySomething($word) {
        echo $word;
    }

    public function setName($name) { // setter
        $this->name = $name;
    }

    public function setAge($age) { // setter
        $this->age = $age;
    }

    public function getName() { // getter
        return $this->name;
    }

    public function getAge() { // getter
        return $this->age;
    }
}

$person = new Person(); // creating object
echo $person->name;
echo $person->age;
$person->saySomething('I am Mikhail'); // calling method

$person->setName('Alex');
$person->setAge(25);

echo $person->getName();
echo $person->getAge();