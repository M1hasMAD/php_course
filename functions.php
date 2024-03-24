<?php
function sayHello() { //every function in PHP starts with 'function'
    echo "Hello";
}
sayHello(); // calling the function

sayHello(); // we can call the function multiple times
sayHello();

function sum($a, $b) { // function with parameters
    echo $a + $b;
}

sum(3, 7); // call and pass arguments to the function

function getSum($a, $b) { // returned function with parameters
    return $a + $b;
}

$sum = getSum(3, 7);
echo $sum;