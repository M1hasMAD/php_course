<?php
class Person2 {
    public $name;
    public $age;

    public function __construct($name, $age) { // constructor
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person2('Mikhail', 20); // creating object
echo $person->name;
echo $person->age;