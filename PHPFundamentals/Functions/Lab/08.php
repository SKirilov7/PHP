<?php
$number = intval(readline());
$factorial = function ($num) {
    $sum = 1;
    for ($i = $num; $i > 0; $i--) {
        $sum *= $i;
    }
    return $sum;
};

echo $factorial($number);