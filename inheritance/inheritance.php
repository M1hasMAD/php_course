<?php
class Person3 {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function work() {
        echo 'Person is working';
    }
}

class Developer extends Person3 {

    public $salary; // want to add new property

    public function __construct($name, $age, $salary) { // call parent constructor
        parent::__construct($name, $age); // 'parent' == 'super' in java
        $this->salary = $salary; // adding new property
    }

    public function work() {
        echo 'Developer is working';
    }
}

class Manager extends Person3 {

    public $bonus;

    public function __construct($bonus) {
        $this->bonus = $bonus;
    }

    public function work() {
        echo 'Manager is working';
    }
}

$developer = new Developer('Mikhail', 20, 1000); // parent constructor + new property
$developer->work();

$manager = new Manager(30); // constructor only with new property
$manager->work();
echo $manager->name;