<?php
$countWagons = intval(readline());
$peopleOnTrain = [];

for ($i = 0; $i < $countWagons; $i++) {
    $peopleOnTrain[] = intval(readline());
};

$people = implode(' ', $peopleOnTrain);
echo $people . PHP_EOL;
echo array_sum($peopleOnTrain);
