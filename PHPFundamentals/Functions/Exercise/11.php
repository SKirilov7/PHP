<?php
function maxNumberEvenOrOdd($array, $evenOrOdd)
{
    $maxNum = PHP_INT_MIN;
    $maxNumIndex = 0;
    if ($evenOrOdd == 'odd') {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] % 2 !== 0 && $array[$i] >= $maxNum) {
                $maxNum = $array[$i];
                $maxNumIndex = $i;
            }
        }
    } else if ($evenOrOdd == 'even') {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] % 2 == 0 && $array[$i] >= $maxNum) {
                $maxNum = $array[$i];
                $maxNumIndex = $i;
            }
        }
    }
    if ($maxNum !== PHP_INT_MIN) {
        return $maxNumIndex;
    } else {
        return 'No matches';
    }

}

function minNumberEvenOrOdd($array, $evenOrOdd)
{
    $minNum = PHP_INT_MAX;
    $minNumIndex = 0;
    if ($evenOrOdd == 'odd') {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] % 2 !== 0 && $array[$i] <= $minNum) {
                $minNum = $array[$i];
                $minNumIndex = $i;
            }
        }
    } else if ($evenOrOdd == 'even') {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] % 2 == 0 && $array[$i] <= $minNum) {
                $minNum = $array[$i];
                $minNumIndex = $i;
            }
        }
    }
    if ($minNum !== PHP_INT_MAX) {
        return $minNumIndex;
    } else {
        return 'No matches';
    }
}

function findFirstEvenNumbers($array, $count)
{
    $arrayEvenCount = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($count == 0) {
            break;
        }
        if ($array[$i] % 2 == 0) {
            $arrayEvenCount[] = $array[$i];
            $count -= 1;
        }
    }
    return $arrayEvenCount;
}

function findFirstOddNumbers($array, $count)
{
    $arrayOddCount = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($count == 0) {
            break;
        }
        if ($array[$i] % 2 !== 0) {
            $arrayOddCount[] = $array[$i];
            $count -= 1;
        }
    }
    return $arrayOddCount;
}

function findLastEvenNums($array, $count)
{
    $array = array_reverse($array);
    $lastEvenNums = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($count == 0) {
            break;
        }
        if ($array[$i] % 2 == 0) {
            $lastEvenNums[] = $array[$i];
            $count -= 1;
        }
    }
    return array_reverse($lastEvenNums);
}

function findLastOddNums($array, $count)
{
    $array = array_reverse($array);
    $lastOddNums = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($count == 0) {
            break;
        }
        if ($array[$i] % 2 !== 0) {
            $lastOddNums[] = $array[$i];
            $count -= 1;
        }
    }
    return array_reverse($lastOddNums);
}

$arrayNums = array_map('intval', explode(' ', readline()));

$command = readline();

while ($command !== 'end') {
    $command = explode(' ', $command);
    $currCommand = $command[0];
    if ($currCommand == 'exchange') {
        $index = intval($command[1]);
        if ($index < 0 || $index >= count($arrayNums)) {
            echo 'Invalid index' . PHP_EOL;
            $command = readline();
            continue;
        }
        $firstHalf = array_slice($arrayNums, 0, $index + 1);
        $secondHalf = array_slice($arrayNums, $index + 1, count($arrayNums) - 1);
        $arrayNums = array_merge($secondHalf, $firstHalf);
    } else if ($currCommand == 'max') {
        $secondComm = $command[1];
        echo maxNumberEvenOrOdd($arrayNums, $secondComm) . PHP_EOL;

    } else if ($currCommand == 'min') {
        $secondComm = $command[1];
        echo minNumberEvenOrOdd($arrayNums, $secondComm) . PHP_EOL;
    } else if ($currCommand == 'first') {
        $count = intval($command[1]);
        $evenOrOdd = $command[2];
        if ($count > count($arrayNums)) {
            echo 'Invalid count' . PHP_EOL;
        } else {
            if ($evenOrOdd == 'even') {
                print_r(findFirstEvenNumbers($arrayNums, $count)) . PHP_EOL;
            } else {
                print_r(findFirstOddNumbers($arrayNums, $count)) . PHP_EOL;
            }
        }

    } else if ($currCommand == 'last') {
        $count = intval($command[1]);
        $evenOrOdd = $command[2];
        if ($count > count($arrayNums)) {
            echo 'Invalid count' . PHP_EOL;
        } else {
            if ($evenOrOdd == 'even') {
                print_r(findLastEvenNums($arrayNums, $count)) . PHP_EOL;
            } else {
                print_r(findLastOddNums($arrayNums, $count)) . PHP_EOL;
            }
        }
    }


    $command = readline();

}

print_r($arrayNums);