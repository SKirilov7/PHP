<?php
$string = readline();
$newStr = '';

$previousChar = '';
for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] !== $previousChar) {
        $newStr .= $string[$i];
    }
    $previousChar = $string[$i];
}

echo $newStr;