<?php
$numsArray = array_map('intval', explode(' ', readline()));
$foundIndex = false;

for ($i = 0; $i < count($numsArray); $i++) {
    $numbersBeforeSum = 0;
    $numbersAfterSum = 0;
    for ($idx = $i; $idx >= 0; $idx--) {
        $numbersBeforeSum += $numsArray[$idx];
    };
    for ($index = $i; $index < count($numsArray); $index++) {
        $numbersAfterSum += $numsArray[$index];
    };
    if ($numbersBeforeSum === $numbersAfterSum) {
        echo $i;
        $foundIndex = true;
    };
};

if (!$foundIndex) {
    echo 'no';
};
