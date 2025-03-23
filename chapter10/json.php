<?php
$jsonString = '{
                "name"       : "John",
                "age"        : 30,
                "is_student" : false,
                "courses"    : ["Math", "Science", "History"]
                }';

$data = json_decode($jsonString, true);

echo $data["name"] . PHP_EOL;
echo $data["age"] . PHP_EOL;
echo var_export($data["is_student"]) . PHP_EOL;
foreach ($data["courses"] as $course) {
    echo $course . PHP_EOL;
}