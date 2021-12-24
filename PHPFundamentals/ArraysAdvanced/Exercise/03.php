<?php
$peopleGoingToParty = [];

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $command = explode(' ', readline());
    $name = $command[0];
    $isOrNotGoing = $command[2];
    if ($isOrNotGoing == 'not') {
        if (in_array($name, $peopleGoingToParty)) {
            $searchedIndex = array_search($name, $peopleGoingToParty);
            array_splice($peopleGoingToParty, $searchedIndex, 1);
        } else {
            echo "$name is not in the list!" . PHP_EOL;
        }
    } else {
        if (!in_array($name, $peopleGoingToParty)) {
            $peopleGoingToParty[] = $name;
        } else {
            echo "$name is already in the list!" . PHP_EOL;
        }
    }
}

echo implode(' ' . PHP_EOL, $peopleGoingToParty);