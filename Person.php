<?php

class Person {
    var $name;
    var $age;

    function greeting() {
        echo "Hello $this->name, my name is $this->name, I am $this->age years old" . PHP_EOL;
    }

    function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }

}

$sela = new Person("Marsela", 20);
$sela->greeting();

