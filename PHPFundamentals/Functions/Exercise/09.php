<?php
function checkIsItPalindrome($str)
{
    return ($str === strrev($str)) ? 'true' : 'false';
}


$string = readline();
while ($string !== 'END') {
    $boolIsPalindrome = checkIsItPalindrome($string);
    echo $boolIsPalindrome . PHP_EOL;
    $string = readline();
}