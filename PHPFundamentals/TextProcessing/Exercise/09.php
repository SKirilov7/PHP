<?php

$string = readline();
$rageQuitMessage = '';
$stringFromLastNum = '';
$timesToRepeat = '';

for ($i = 0; $i < strlen($string); $i++) {
    $currentChar = strtoupper($string[$i]);
    if (ctype_digit($currentChar)) {
        $timesToRepeat .= $currentChar;
        if ($i + 1 >= strlen($string) || !ctype_digit($string[$i + 1])) {
            $rageQuitMessage .= str_repeat($stringFromLastNum, intval($timesToRepeat));
            $timesToRepeat = '';
            $stringFromLastNum = '';
        }
    } else {
        $stringFromLastNum .= $currentChar;
    }

}

$uniqueSymbolsCount = count(array_unique(str_split($rageQuitMessage)));
echo "Unique symbols used: $uniqueSymbolsCount" . PHP_EOL;
echo $rageQuitMessage;