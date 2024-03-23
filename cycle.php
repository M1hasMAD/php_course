<?php
$person = [
    'name' => 'Mikhail',
    'age' => 20,
    'height' => 189.5,
    'isMarried' => false,
    'DoIHavePet' => true
];

foreach ($person as $value) { // foreach for values
    echo $value . "\n";
}
// output: Mikhail
// 20
// 189.5
// false(=nothing)
// 1


foreach ($person as $key => $value) { // foreach for key - value
    echo $key . ': ';
    echo $value . "\n";
}
// output: name: Mikhail
// age: 20
// height: 189.5
// isMarried: false(=nothing)
// DoIHavePet: 1

