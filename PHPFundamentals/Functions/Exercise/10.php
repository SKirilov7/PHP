<?php
function findTopNumbers($num)
{
    $validNumbers = [];
    for ($i = 8; $i < $num; $i++) {
        $hasOddNum = false;
        $sumOfDigits = 0;
        $numberAsString = strval($i);
        for ($index = 0; $index < strlen($numberAsString); $index++) {
            $sumOfDigits += intval($numberAsString[$index]);
            if (intval($numberAsString[$index]) % 2 !== 0) {
                $hasOddNum = true;
            }
        }
        if ($sumOfDigits % 8 == 0 && $hasOddNum) {
            $validNumbers[] = $i;
        }
    }
    return $validNumbers;
}


$number = intval(readline());
$numbers = findTopNumbers($number);
echo implode(' ' . PHP_EOL, $numbers);
