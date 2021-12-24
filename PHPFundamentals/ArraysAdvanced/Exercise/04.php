<?php
$arrNums = array_map('intval', explode(' ', readline()));

$command = readline();

while ($command !== 'End') {
    $command = explode(' ', $command);
    $currCommand = $command[0];
    $number = ($command[1] == intval($command[1])) ? intval($command[1]) : $command[1];
    $index = (isset($command[2])) ? intval($command[2]) : false;

    switch ($currCommand) {
        case 'Add':
            $arrNums[] = $number;
            break;
        case 'Insert':
            if ($index >= count($arrNums)) {
                echo 'Invalid index' . PHP_EOL;
                break;
            }
            array_splice($arrNums, $index, 0, $number);
            break;
        case 'Remove':
            $index = $number;
            if ($index < count($arrNums)) {
                array_splice($arrNums, $index, 1);

            } else {
                echo 'Invalid index' . PHP_EOL;
            }
            break;
        case 'Shift':
            $secondCommand = $number;
            $count = $index;
            if ($secondCommand == 'left') {
                while ($count > 0) {
                    $element = array_shift($arrNums);
                    $arrNums[] = $element;
                    $count -= 1;
                }
            } else {
                while ($count > 0) {
                    $element = array_pop($arrNums);
                    array_splice($arrNums, 0, 0, $element);
                    $count -= 1;
                }
                break;

            }
    }
    $command = readline();
}

echo implode(' ', $arrNums);