<?php

function checkIsPasswordValid($pass)
{
    $valid = true;
    if (strlen($pass) < 6 || strlen($pass) > 10) {
        $valid = false;
        echo "Password must be between 6 and 10 characters" . PHP_EOL;
    }
    if (!ctype_alnum($pass)) {
        $valid = false;
        echo "Password must consist only of letters and digits" . PHP_EOL;
    }
    if (count(array_filter(str_split($pass), 'is_numeric')) < 2) {
        $valid = false;
        echo "Password must have at least 2 digits" . PHP_EOL;
    }
    return $valid;
}

$password = readline();
if (checkIsPasswordValid($password)) {
    echo 'Password is valid';
}