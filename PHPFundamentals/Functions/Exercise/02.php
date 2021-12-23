<?php
function countTheVowels($someString)
{
    $someString = strtolower($someString);
    $Vowels = substr_count($someString, 'a') + substr_count($someString, 'e') + substr_count($someString, 'i') + substr_count($someString, 'o') + substr_count($someString, 'u');
    return $Vowels;
}

$string = readline();
echo countTheVowels($string);