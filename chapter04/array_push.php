<?php
$fruits = ["apple", "banana"];
echo json_encode($fruits) . PHP_EOL;
array_push($fruits, "cherry");
echo json_encode($fruits) . PHP_EOL;

$fruits = ["apple", "banana"];
echo json_encode($fruits) . PHP_EOL;
array_unshift($fruits, "cherry");
echo json_encode($fruits) . PHP_EOL;