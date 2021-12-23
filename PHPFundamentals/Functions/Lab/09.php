<?php

function multiplySumOfOddAndEvenNumbersInAInteger($num)
{
    return findAllEvenNumbers($num) * findAllOddNumbers($num);
}


function findAllEvenNumbers($num)
{
    $sumEvens = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $currNum = intval($num[$i]);
        if ($currNum % 2 == 0) {
            $sumEvens += $currNum;
        }
    }
    return $sumEvens;
}

function findAllOddNumbers($num)
{
    $sumOdd = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $currNum = intval($num[$i]);
        if ($currNum % 2 !== 0) {
            $sumOdd += $currNum;
        }
    }
    return $sumOdd;
}

$number = readline();

echo multiplySumOfOddAndEvenNumbersInAInteger($number);
