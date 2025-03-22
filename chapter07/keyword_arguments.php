<?php
function greet($args) {
    $name = $args['name'] ?? 'Guest';
    $age = $args['age'] ?? 'unknown';

    echo "Hello, I am $name!\n";
    echo "I am $age years old.\n";
}
greet(['age' => 20, 'name' => 'Alice']);