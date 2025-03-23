<?php
$pattern = '/PHP/';

echo preg_replace($pattern, "Python", "PHP") . PHP_EOL;
echo preg_replace($pattern, "Python", "PHP PHP") . PHP_EOL;