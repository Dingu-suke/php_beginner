<?php
$fruits = ["apple", "banana", "cherry", "date", "elderberry"];
echo $fruits[0] . PHP_EOL;
echo $fruits[1] . PHP_EOL;
echo $fruits[2] . PHP_EOL;

$fruits = ["apple", "banana", "cherry", "date", "elderberry"];
echo json_encode(array_slice($fruits, 1, 3)) . PHP_EOL;