<?php

$arrNums = array_map('intval', explode(' ', readline()));
$command = readline();

while ($command !== 'end') {
    $command = explode(' ', $command);
    $currCommand = $command[0];
    $firstNumOrIndex = $command[1];
    $secondNumOrIndex = (isset($command[2])) ? intval($command[2]) : false;

    switch ($currCommand) {
        case 'Add':
            $arrNums[] = intval($firstNumOrIndex);
            break;
        case 'Remove':
            $indexNumber = array_search(intval($firstNumOrIndex), $arrNums);
            array_splice($arrNums, $indexNumber, 1);
            break;
        case 'RemoveAt':
            array_splice($arrNums, intval($firstNumOrIndex), 1);
            break;
        case "Insert":
            array_splice($arrNums, $secondNumOrIndex, 0, intval($firstNumOrIndex));
            break;
        case 'Contains':
            echo (in_array(intval($firstNumOrIndex), $arrNums)) ? 'Yes' : 'No such number';
            echo PHP_EOL;
            break;
        case 'Print':
            foreach ($arrNums as $item) {
                if ($firstNumOrIndex == 'even' && $item % 2 == 0) {
                    echo $item . ' ';
                } else if ($firstNumOrIndex == 'odd' && $item % 2 !== 0) {
                    echo $item . ' ';

                }
            }
            echo PHP_EOL;
            break;
        case 'Get':
            echo array_sum($arrNums) . PHP_EOL;
            break;
        case 'Filter':
            $condition = $firstNumOrIndex;
            foreach ($arrNums as $item) {
                if ($condition == '>=' && $item >= $secondNumOrIndex) {
                    echo $item . ' ';
                } else if ($condition == '<=' && $item <= $secondNumOrIndex) {
                    echo $item . ' ';
                } else if ($condition == '<' && $item < $secondNumOrIndex) {
                    echo $item . ' ';
                } else if ($condition == '>' && $item > $secondNumOrIndex) {
                    echo $item . ' ';
                }
            }
            echo PHP_EOL;
            break;
    }
    $command = readline();
}

echo implode(' ', $arrNums);