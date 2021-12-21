<?php
$arrNums = array_map('intval', explode(' ', readline()));
$searchedSum = intval(readline());

for ($i = 0; $i < count($arrNums) - 1; $i++) {
    $currElement = $arrNums[$i];
    $index = $i + 1;
    while ($index < count($arrNums)) {
        if ($currElement + $arrNums[$index] == $searchedSum) {
            echo "$currElement $arrNums[$index]" . PHP_EOL;
        };
        $index++;

    };
};
