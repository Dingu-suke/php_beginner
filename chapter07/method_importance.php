<?php
echo "Hello, Alice!\n";
echo "Hello, Bob!\n";
echo "Hello, Carol!\n";

echo "-------------------------------" . PHP_EOL;

function greet($name) {
  echo "Hello, $name!\n";
}

greet("Alice");
greet("Bob");
greet("Carol");