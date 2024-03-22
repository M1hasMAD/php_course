<?php
$person1 = ['Mikhail', 20, 189.5, false, true]; // indexed array

$person2 = [ // associative array
    'name' => 'Mikhail',
    'age' => 20,
    'height' => 189.5,
    'isMarried' => false,
    'DoIHavePet' => true
];

print_r($person1); //output: Array ( [0] => Mikhail [1] => 20 [2] => 189.5 [3] => false(=nothing) [4] => true(=1))
print_r($person2); //output: Array ( [name] => Mikhail [age] => 20 [height] => 189.5 [isMarried] => false(=nothing) [DoIHavePet] => true(=1))

print_r($person2['height']); //output: 189.5

$person2['hobby'] = 'programming'; // adding new pair to array
$person2['age'] = 21; // changing value

unset($person2['name']); // removing element from array by key

print_r($person2); //output: Array ( [age] => 21 [height] => 189.5 [isMarried] => false(=nothing) [DoIHavePet] => true(=1) [hobby] => programming)