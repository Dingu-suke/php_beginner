<?php
$pattern = '/PHP/';

preg_match_all($pattern, "PHP", $matches1);
echo json_encode($matches1[0]) . PHP_EOL;

preg_match_all($pattern, "PHP PHP", $matches2);
echo json_encode($matches2[0]) . PHP_EOL;
