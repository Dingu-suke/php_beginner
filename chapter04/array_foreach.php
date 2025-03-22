<?php
$fruits = ["apple", "banana", "cherry"];

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}

$fruits = ["apple", "banana", "cherry"];

foreach ($fruits as $index => $fruit) {
    echo "{$index}: {$fruit}\n";
}