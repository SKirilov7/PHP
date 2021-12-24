<?php
$arrNums = array_map('intval', explode(' ', readline()));
$currLastIndex = count($arrNums) - 1;
$middleIndex = ceil(count($arrNums) / 2);

$newArray = [];
for ($i = 0; $i < $middleIndex; $i++) {
    if ($i == $currLastIndex) {
        $newArray[] = $arrNums[$i];
        break;
    }
    $newArray[] = $arrNums[$i] + $arrNums[$currLastIndex];
    $currLastIndex -= 1;
}

echo implode(' ', $newArray);