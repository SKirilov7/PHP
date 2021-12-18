<?php
$integer = intval(readline());
for ($i = 1; $i <= 10; $i++){
    $currentSum = $integer * $i;
    echo "$integer X $i = $currentSum".PHP_EOL;
};