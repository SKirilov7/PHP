<?php
$number = intval(readline());

while (!($number % 2 == 0)){
    echo 'Please write an even number.'.PHP_EOL;
    $number = intval(readline());
}

printf('The number is: %d', abs($number));

