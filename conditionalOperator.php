<?php
$person = [
    'name' => 'Mikhail',
    'age' => 20,
    'height' => 190,
    'isMarried' => false,
    'DoIHavePet' => true
];

if ($person['name']) { // true
    echo 'Hello ' . $person['name'];
}

if ($person['city']) { // false bc city is not exists in array
    echo 'City is ' . $person['city'];
}

if ($person['name'] == 'Mikhail') { // true
    echo 'Hello Mikhail';
}

if ($person['age'] > 18) { // true
    echo 'You are adult';
}

if ($person['height'] >= 190) { // true
    echo 'You are tall';
}

if ($person['age'] == 20 && $person['height'] == 190) { // true bc both should be true
    echo 'You are 20 and tall';
}

if ($person['age'] == 18 && $person['height'] == 190) { // false bc there's at least one false
    echo 'You are 20 and tall';
}

if ($person['age'] == 20 || $person['height'] == 150) { // true bc at least one should be true
    echo 'You are 20 or tall';
}

if ($person['age'] == 18 || $person['height'] == 150) { // false bc at least one should be true
    echo 'You are 20 or tall';
}

$age = 20;

if ($age === '20') { // false bc different data types (int vs string)
    echo 'You are 20 (String)';
}

if ($age === 20) { // true bc same data types
    echo 'You are 20 (int)';
}