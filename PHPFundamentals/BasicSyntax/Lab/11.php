<?php
$integer = intval(readline());
$multiplier = intval(readline());
if ($multiplier > 10) {
    $currentSum = $integer * $multiplier;
    echo "$integer X $multiplier = $currentSum";
} else {
    for ($i = 1; $i <= 10; $i++){
        $currentSum = $integer * $i;
        echo "$integer X $i = $currentSum".PHP_EOL;
    };
};