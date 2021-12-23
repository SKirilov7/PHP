<?php
function calculateFactorial($num)
{
    $sum = 1;
    if ($num > 0) {
        for ($i = 1; $i <= $num; $i++) {
            $sum *= $i;
        }
    } else if ($num < 0) {
        for ($i = $num; $i < 0; $i++) {
            $sum *= $i;
        }
    }
    return $sum;
}

function makeDivision($num1, $num2): float
{
    if ($num2 > 0) {
        return round($num1 / $num2, 2);
    } else {
        return $num1;
    }
}

$firstNum = intval(readline());
$secondNum = intval(readline());
$sum = number_format(makeDivision(calculateFactorial($firstNum), calculateFactorial($secondNum)), 2);
echo $sum;
