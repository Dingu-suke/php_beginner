<?php
$a = true;
$b = false;
$c = 'RUNTEQ';

echo var_export($a && $c, true) . PHP_EOL; # => true
echo var_export($b && $c, true) . PHP_EOL; # => false
