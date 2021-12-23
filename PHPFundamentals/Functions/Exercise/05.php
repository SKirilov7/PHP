<?php
function sumIntegers($int1, $int2)
{
    return $int1 + $int2;
}

;

function subtractIntegers($int1, $int2)
{
    return $int1 - $int2;
}

$firstNum = intval(readline());
$secondNum = intval(readline());
$thirdNum = intval(readline());

$sum = sumIntegers($firstNum, $secondNum);
echo subtractIntegers($sum, $thirdNum);