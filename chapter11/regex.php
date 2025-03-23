<?php
$pattern = '/PHP/';

if (preg_match($pattern, "PHP")) {
    echo "PHP\n";
}
if (preg_match($pattern, "Python")) {
    echo "Python\n";
}