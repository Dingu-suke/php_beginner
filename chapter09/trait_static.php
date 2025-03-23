<?php
trait Greeting {
  public static function hello() {
    return "Hello!";
  }
}

class Person {
  use Greeting;
}

echo Person::hello() . PHP_EOL;