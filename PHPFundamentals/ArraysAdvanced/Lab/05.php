<?php
$arrNums = array_map('intval', explode(' ', readline()));
$command = readline();

while ($command !== 'end') {
    $command = explode(' ', $command);
    $currCommand = $command[0];
    $firstNumOrIndex = intval($command[1]);
    $secondNumOrIndex = (isset($command[2])) ? intval($command[2]) : false;

    switch ($currCommand) {
        case 'Add':
            $arrNums[] = $firstNumOrIndex;
            break;
        case 'Remove':
            $indexNumber = array_search($firstNumOrIndex, $arrNums);
            array_splice($arrNums, $indexNumber, 1);
            break;
        case 'RemoveAt':
            array_splice($arrNums, $firstNumOrIndex, 1);
            break;
        case "Insert":
            array_splice($arrNums, $secondNumOrIndex, 0, $firstNumOrIndex);
            break;
    }
    $command = readline();
}

echo implode(' ', $arrNums);