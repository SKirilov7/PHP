<?php
$arrayInts = array_map('intval', explode(' ', readline()));
$command = readline();

while ($command !== 'Odd' && $command !== 'Even') {
    $command = explode(' ', $command);
    $currCommand = $command[0];
    $element = intval($command[1]);
    $position = (isset($command[2])) ? intval($command[2]) : false;

    if ($currCommand == 'Delete') {
        $i = 0;
        while ($i < count($arrayInts)) {
            if ($arrayInts[$i] == $element) {
                array_splice($arrayInts, $i, 1);
            } else {
                $i++;
            }
        }
    } else if ($currCommand == 'Insert') {
        array_splice($arrayInts, $position, 0, $element);
    }
    $command = readline();
}


if ($command == 'Even') {
    echo implode(' ', array_filter(array_map(function ($el) {
        return ($el % 2 == 0) ? $el : false;
    }, $arrayInts)));
} else {
    echo implode(' ', array_filter(array_map(function ($el) {
        return ($el % 2 !== 0) ? $el : false;
    }, $arrayInts)));
}