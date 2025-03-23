<?php

trait Greeting {
  const HELLO = "Hello!";

  public function hello() {
    return self::HELLO;
  }
}

class Person {
  use Greeting;
}

$person = new Person();
echo $person->hello() . PHP_EOL;
echo Person::HELLO . PHP_EOL;