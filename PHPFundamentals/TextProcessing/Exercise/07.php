<?php
$string = readline();
$power = 0;
$newStr = '';

for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i - 1] == '>') {
        $power += intval($string[$i]);
    }
    if (!($power > 0) || $string[$i] == '>') {
        $newStr .= $string[$i];
    } else if ($power > 0) {
        $power--;
    }
}

echo $newStr;