<?php

function findMiddleCharacter($string)
{
    $countChars = strlen($string);
    $middleChar = '';
    if ($countChars % 2 !== 0) {
        $index = floor($countChars / 2);
        $middleChar = $string[$index];
    } else {
        $firstIndex = $countChars / 2 - 1;
        $secondIndex = $firstIndex + 1;
        $middleChar = $string[$firstIndex] . $string[$secondIndex];
    }
    return $middleChar;
}

$string = readline();
echo findMiddleCharacter($string);
