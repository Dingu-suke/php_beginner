<?php
$fruits = ["apple", "banana", "cherry"];
echo json_encode($fruits) . PHP_EOL;
$fruits[1] = "avocado";
echo json_encode($fruits) . PHP_EOL;