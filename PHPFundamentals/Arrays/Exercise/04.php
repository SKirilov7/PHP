<?php
$arrNums = explode(' ', readline());
$numberTurns = intval(readline());
$numberTurns = $numberTurns % count($arrNums);

for ($i = 0; $i < $numberTurns; $i++) {
    $firstElement = array_shift($arrNums);
    $arrNums[] = $firstElement;
};

echo implode(' ', $arrNums);
