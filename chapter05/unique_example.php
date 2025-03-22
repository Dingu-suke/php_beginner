<?php
$numbers = [1, 2, 2, 3, 4, 4, 5, 5, 5];
$unique_numbers = array_values(array_unique($numbers));
echo json_encode($numbers) . PHP_EOL;
echo json_encode($unique_numbers) . PHP_EOL;

echo "----------------------" . PHP_EOL;

$numbers = [1, 2, 2, 3, 4, 4, 5, 5, 5];
$unique_numbers = [];

foreach ($numbers as $number) {
    if (!in_array($number, $unique_numbers)) {
        $unique_numbers[] = $number;
    }
}

echo json_encode($numbers) . PHP_EOL;
echo json_encode($unique_numbers) . PHP_EOL;