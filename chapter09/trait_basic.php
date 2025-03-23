<?php
trait Greeting {
    public function hello() {
        return "Hello!";
    }
}

class Person {
    use Greeting;

    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()      { return $this-> name; }
    public function setName($name) { $this->name = $name; }
    public function getAge()       { return $this->age; }
    public function setAge($age)   { $this->age = $age; }
}

$person = new Person("太郎", 30);
echo $person->hello() . PHP_EOL;