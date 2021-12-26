<?php
$arrNums = explode(' ', readline());
$currNumToAdd = readline();

while ($currNumToAdd !== 'end') {
    $index = intval($currNumToAdd[0]);
    array_splice($arrNums, $index, 0, $currNumToAdd);
    $currNumToAdd = readline();
}

echo implode(' ', $arrNums);