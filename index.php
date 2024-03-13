<?php
$name = 'Misha';
$age = 20;
$isMarried = true;
$weight = 70;

$person = [
    'name' => 'Mikhail',
    'age' => 20,
    'is_married' => true,
    'weight' => 70,
    'friend' => 'Miguel'
];

$person1 = [
    'name' => 'Miguel',
    'age' => 25,
    'is_married' => false,
    'weight' => 83,
    'friend' => 'Mikhail'
];

$persons = [
    [
        'name' => 'Mikhail',
        'age' => 20,
        'is_married' => true,
        'weight' => 70,
        'friend' => 'Miguel'
    ],
    [
        'name' => 'Miguel',
        'age' => 25,
        'is_married' => false,
        'weight' => 83,
        'friend' => 'Mikhail'
    ]
];


//unset($person['age']);


//foreach ($person as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}


//print_r($person);


//if ($age === 20) {
//    echo 'You are older than 20' . "\n";
//} else {
//    echo 'You are younger than 20' . "\n";
//}


//function sum() {
//    $sum = 5 + 5;
//    echo $sum;
//}
//
//sum();


//function sum($a, $b) {
//    $sum = $a + $b;
//    return $sum . "\n";
//}
//
//$value = sum(1, 2);
//echo $value;

class Person {
    public $name = 'Misha';
    public $age = 20;
    public $isMarried = true;
    public $weight = 70;

    public function sum($a, $b) {
        return $a + $b;
    }

    public function __construct($name, $age, $isMarried, $weight) {
        $this->name = $name;
        $this->age = $age;
        $this->isMarried = $isMarried;
        $this->weight = $weight;
    }
}

$person = new Person('Miguel', 25, false, 70);
$value = $person->sum(2, 4);
echo $value . "\n";