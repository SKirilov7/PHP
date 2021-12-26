<?php
function returnStringToAddMergeFunction($startIndex, $endIndex, $Array)
{
    $newStr = '';
    for ($i = $startIndex; $i <= $endIndex; $i++) {
        $newStr .= $Array[$i];
    }
    return $newStr;
}

function returnDividedElements($numPartitions, $elToDivide, $length)
{
    $newElements = [];
    $offset = 0;
    for ($i = 0; $i < $numPartitions; $i++) {
        if ($i == $numPartitions - 1) {
            $length = strlen($elToDivide) - $offset;
        }
        $currSubstring = substr($elToDivide, $offset, $length);
        $newElements[] = $currSubstring;
        $offset += $length;
    }
    return $newElements;
}

$codeArr = explode(' ', readline());

$command = readline();

while ($command !== '3:1') {
    $command = explode(' ', $command);
    $currCommand = $command[0];
    $startIndex = intval($command[1]);
    $endIndexOrPartitions = intval($command[2]);

    if ($currCommand == 'merge') {
        $startIndex = ($startIndex < 0) ? 0 : $startIndex;
        $endIndexOrPartitions = ($endIndexOrPartitions >= count($codeArr)) ? count($codeArr) - 1 : $endIndexOrPartitions;
        $strToAdd = returnStringToAddMergeFunction($startIndex, $endIndexOrPartitions, $codeArr);
        $length = $endIndexOrPartitions - $startIndex + 1;
        array_splice($codeArr, $startIndex, $length, $strToAdd);
    } else {
        $elementToDivide = $codeArr[$startIndex];
        $length = floor(strlen($elementToDivide) / $endIndexOrPartitions);
        $newElements = returnDividedElements($endIndexOrPartitions, $elementToDivide, $length);
        array_splice($codeArr, $startIndex, 1, $newElements);
    }


    $command = readline();
}

echo implode(' ', $codeArr);