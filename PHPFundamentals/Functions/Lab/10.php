<?php
function repeatString($str, $n)
{
    $newStr = '';
    for ($i = 0; $i < $n; $i++) {
        $newStr .= $str;
    }
    return $newStr;
}

$string = readline();
$timesRepeat = intval(readline());
echo repeatString($string, $timesRepeat);