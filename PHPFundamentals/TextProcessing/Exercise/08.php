<?php
function findStringResult($str, $alphabet)
{
    $number = intval(substr($str, 1, strlen($str) - 2));
    $letterBefore = $str[0];
    $lastLetter = $str[-1];
    if (ctype_upper($letterBefore)){
        $positionInAlphabet = array_search($letterBefore, $alphabet) + 1;
        $number /= $positionInAlphabet;
    } else {
        $positionInAlphabet = array_search(strtoupper($letterBefore), $alphabet) + 1;
        $number *= $positionInAlphabet;
    }
    if (ctype_upper($lastLetter)){
        $positionInAlphabet = array_search($lastLetter, $alphabet) + 1;
        $number -= $positionInAlphabet;
    } else {
        $positionInAlphabet = array_search(strtoupper($lastLetter), $alphabet) + 1;
        $number += $positionInAlphabet;
    }
    return $number;

}


$strings = array_filter(explode(' ', readline()), function ($el) {if ($el){ return $el;}});
$totalSum = 0;
$alphas = range('A', 'Z');

foreach ($strings as $string) {
    $totalSum += findStringResult($string, $alphas);
}

$totalSum = round($totalSum, 2);
printf('%.2f', $totalSum);
