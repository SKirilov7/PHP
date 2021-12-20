<?php
$pokePower = intval(readline());
$distanceBetweenTargets = intval(readline());
$exhaustingFactor = intval(readline());
$pokedTargets = 0;
$startingPokePower = $pokePower;

while ($pokePower >= $distanceBetweenTargets){
    $pokedTargets++;
    $pokePower -= $distanceBetweenTargets;
    if ($pokePower * 2 === $startingPokePower){
        if ($exhaustingFactor > 0 && $exhaustingFactor <= $pokePower){
            $pokePower = intval($pokePower / $exhaustingFactor);
        };
    };
};

echo $pokePower.PHP_EOL;
echo $pokedTargets.PHP_EOL;
