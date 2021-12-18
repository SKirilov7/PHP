<?php
$batches = intval(readline());
$totalBoxes = 0;

for ($i = 0; $i < $batches; $i++ ){
    $flour = intval(readline());
    $sugar = intval(readline());
    $cocoa = intval(readline());
    $flourCups = floor($flour / 140);
    $sugarSpoons = floor($sugar / 20);
    $cocoaSpons = floor($cocoa / 10);
    if ($flourCups == 0 || $sugarSpoons == 0 || $cocoaSpons == 0){
        echo "Ingredients are not enough for a box of cookies.".PHP_EOL;
        continue;
    }

    $totalCookies = floor((140 + 10 + 20) * min($flourCups, $sugarSpoons, $cocoaSpons) / 25);
    $boxesPerCurrentBake = floor($totalCookies / 5);
    echo "Boxes of cookies: $boxesPerCurrentBake".PHP_EOL;
    $totalBoxes += $boxesPerCurrentBake;
};

echo "Total boxes: $totalBoxes";
