<?php
class Person {
    public function greet() {
        return "Hello!";
    }
}

$person = new Person();
echo $person->greet() . "\n";