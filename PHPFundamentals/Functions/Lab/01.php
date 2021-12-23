<?php

function checkIfNumIsPositiveZeroOrNegative($number)
{
    if ($number > 0) {
        return "The number $number is positive.";
    } else if ($number < 0) {
        return "The number $number is negative.";
    } else {
        return "The number 0 is zero.";
    }
}

$integer = intval(readline());
echo checkIfNumIsPositiveZeroOrNegative($integer);
