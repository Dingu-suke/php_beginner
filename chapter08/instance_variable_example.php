<?php
class Person {
    private string $name;
    private int $age;
    private string $country;

    public function __construct(string $name, int $age, string $country) {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    public function info(): string {
        return "{$this->name}, {$this->age}歳, {$this->country}出身";
    }
}

$person = new Person("太郎", 30, "Japan");
var_dump($person);
echo $person->info() . "\n";