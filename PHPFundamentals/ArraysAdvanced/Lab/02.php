<?php
$arrNums = array_map('floatval', explode(' ', readline()));

for ($i = 0; $i < count($arrNums) - 1; $i++) {
    if ($arrNums[$i] === $arrNums[$i + 1]) {
        $newElement = $arrNums[$i] * 2;
        array_splice($arrNums, $i, 2, $newElement);
        if ($i < 1) {
            $i = -1;
        } else {
            $i -= 2;
        }
    }
}

echo implode(' ', $arrNums);