<?php
$trainWagons = array_map('intval', explode(' ', readline()));
$maxCapacityWagon = intval(readline());

$command = readline();

while ($command !== 'end') {
    $currCommand = $command;
    $passengers = 0;
    if (count(explode(' ', $command)) == 2) {
        $command = explode(' ', $command);
        $currCommand = $command[0];
        $passengers = intval($command[1]);
    }
    if ($currCommand == 'Add' && $passengers <= 75) {
        $trainWagons[] = $passengers;
    } else {
        for ($i = 0; $i < count($trainWagons); $i++) {
            $passengers = intval($currCommand);
            if ($trainWagons[$i] + $passengers <= $maxCapacityWagon) {
                $trainWagons[$i] += $passengers;
                break;
            }
        }
    }
    $command = readline();
}


echo implode(' ', $trainWagons);