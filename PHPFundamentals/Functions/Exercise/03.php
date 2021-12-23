<?php

function printAllCharactersBetweenThisTwo($char1, $char2)
{
    $char1 = ord($char1);
    $char2 = ord($char2);
    if ($char1 > $char2) {
        for ($i = $char2 + 1; $i < $char1; $i++) {
            $currChar = chr($i);
            echo "$currChar ";
        }
    } else {
        for ($i = $char1 + 1; $i < $char2; $i++) {
            $currChar = chr($i);
            echo "$currChar ";
        }
    }
}


$firstChar = readline();
$secondChar = readline();
printAllCharactersBetweenThisTwo($firstChar, $secondChar);