<?php
$hash = [
    "name" => "Alice",
    "age" => 30,
    "city" => "Wonderland"
];

foreach ($hash as $key => $value) {
  echo "{$key}: {$value}" . PHP_EOL;
}
