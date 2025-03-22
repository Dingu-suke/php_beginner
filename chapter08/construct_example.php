<?php
class Person {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function info(): string {
        return "{$this->name}, {$this->age}歳";
    }
}

$person = new Person("太郎", 30);
var_dump($person);
echo $person->info() . "\n";