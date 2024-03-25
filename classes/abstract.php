<?php
abstract class Person4 { // abstract - cannot create object by this class
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Programmer extends Person4 {
    public $language;
    public function __construct($name, $age, $language)
    {
        parent::__construct($name, $age);
        $this->language = $language;
    }
}

$programmer = new Programmer('Mikhail', 20, 'PHP');
echo $programmer->name . ' ' . $programmer->age . ' ' . $programmer->language;