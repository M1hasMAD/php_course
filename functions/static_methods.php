<?php
class Person5 {
    public static $name;

    public static function sum($a, $b) { //static methods works only with the class, where it is declared
        return $a + $b;
    }

    public static function setName($name) {
        self::$name = $name; // 'self' -> instead of 'this', bc it's static field
    }

}

$sum = Person5::sum(40, 50); // '::' -> always use for static methods
echo $sum;

Person5::setName('Mikhail'); // '::' -> calling class, not object
echo Person5::$name;