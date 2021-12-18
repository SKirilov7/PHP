<?php
$currentBalance = floatval(readline());
$currentCommand = readline();
$spentMoney = 0;

while ($currentCommand != 'Game Time') {
    $wantedGamePrice = 0;
    if ($currentCommand =='OutFall 4'){
        $wantedGamePrice = 39.99;
    }else if ($currentCommand =='CS: OG') {
        $wantedGamePrice = 15.99;
    }else if ($currentCommand =='Zplinter Zell'){
        $wantedGamePrice = 19.99;
    }else if ($currentCommand =='Honored 2'){
        $wantedGamePrice = 59.99;
    }else if ($currentCommand =='RoverWatch'){
        $wantedGamePrice = 29.99;
    } else if ($currentCommand == 'RoverWatch Origins Edition'){
        $wantedGamePrice = 39.99;
    }else {
        echo 'Not Found'.PHP_EOL;
        $currentCommand = readline();
        continue;
    };
    if ($currentBalance < $wantedGamePrice){
        echo 'Too Expensive'.PHP_EOL;
    } else{
        $currentBalance -= $wantedGamePrice;
        $spentMoney += $wantedGamePrice;
        echo "Bought $currentCommand".PHP_EOL;
    };
    if ($currentBalance == 0) {
        echo 'Out of money!'.PHP_EOL;
        break;
    }
    $currentCommand = readline();
};

if ($currentBalance != 0) {
    printf("Total spent: $%.2f. Remaining: $%.2f", $spentMoney, $currentBalance);
};