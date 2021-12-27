<?php
$gold = [];

$currentGoldOrAmount = readline();
$currentGold = '';
$currentAmount = Null;
$counterInput = 0;
while ($currentGoldOrAmount !== 'stop') {
    if ($counterInput % 2 == 0) {
        $currentGold = $currentGoldOrAmount;
    } else {
        $currentAmount = intval($currentGoldOrAmount);
    }
    if ($currentGold && $currentAmount !== Null) {
        if (!key_exists($currentGold, $gold)) {
            $gold[$currentGold] = 0;
        }
        $gold[$currentGold] += $currentAmount;
        $currentGold = '';
        $currentAmount = Null;
    }

    $counterInput++;
    $currentGoldOrAmount = readline();
}

foreach ($gold as $goldType => $karats) {
    echo "$goldType -> $karats" . 'K' . PHP_EOL;
}