<?php
$balance = 0;

$currentCommand = readline();

while ($currentCommand !== 'Start'){
    $currentCommand = round(floatval($currentCommand), 2);
    if ($currentCommand !== 0.1 && $currentCommand !== 0.2 && $currentCommand !== 0.5 && $currentCommand != 1.0 && $currentCommand != 2.0){
        echo "Cannot accept $currentCommand".PHP_EOL;
        $currentCommand = readline();
        continue;
    }
    $balance += $currentCommand;
    $currentCommand = readline();
};

$currentCommand = readline();

while ($currentCommand !== 'End'){
    $currProductPrice = 0;
    $isNotValidProduct = false;
    switch ($currentCommand){
        case 'Nuts':
            $currProductPrice = round(2.0,2);
            break;
        case 'Water':
            $currProductPrice = round(0.7,2);
            break;
        case 'Crisps':
            $currProductPrice = round(1.5, 2);
            break;
        case 'Soda':
            $currProductPrice = round(0.8, 2);
            break;
        case 'Coke':
            $currProductPrice = round(1.0, 2);
            break;
        default:
            echo "Invalid product".PHP_EOL;
            $isNotValidProduct = true;
            break;
    };

    if (!$isNotValidProduct && $balance >= $currProductPrice){
        $productName = strtolower($currentCommand);
        echo "Purchased $productName".PHP_EOL;
        $balance -= $currProductPrice;
    } else if (!$isNotValidProduct || $balance < $currProductPrice){
        echo 'Sorry, not enough money'.PHP_EOL;
    };
    $currentCommand = readline();


};

printf("Change: %.2f", $balance);
