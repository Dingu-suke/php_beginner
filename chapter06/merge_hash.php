<?php
$hash1 = [ "name" => "Alice", "age" => 30 ];
$hash2 = [ "city" => "Wonderland" ];
$hash3 = [ "name" => "Bob", "age" => 20 ];

$merged_hash = array_merge($hash1, $hash2);
print_r($merged_hash);

echo '----------------------------' . PHP_EOL;

$merged_hash_with_conflict = array_merge($hash1, $hash3);
print_r($merged_hash_with_conflict);