<?php
$Money = 0;
$priceCoke = 1;
$priceNuts = 2;
$priceWater = 0.7;
$priceCrisps = 1.5;
$priceSoda = 0.8;

$input = readline();
while ($input != 'Start'){
    $currentMoney = floatval($input);
    if ($currentMoney === 0.5 || $currentMoney === 1.0 || $currentMoney === 2.0 || $currentMoney === 0.1 || $currentMoney === 0.2){
        $Money += round($currentMoney,2);
    } else {
        echo "Cannot accept $currentMoney".PHP_EOL;
    };
    $input = readline();
};

$inputProducts = readline();
while ($inputProducts != 'End'){
    switch ($inputProducts){
        case 'Coke':
            if ($Money >= $priceCoke){
                echo 'Purchased coke'.PHP_EOL;
                $Money -= $priceCoke;
            } else {
                echo 'Sorry, not enough money'.PHP_EOL;
            };
            break;
        case 'Nuts':
            if ($Money >= $priceNuts){
                echo 'Purchased nuts'.PHP_EOL;
                $Money -= $priceNuts;
            } else {
                echo 'Sorry, not enough money'.PHP_EOL;
            };
            break;
        case 'Water':
            if ($Money >= $priceWater){
                echo 'Purchased water'.PHP_EOL;
                $Money -= $priceWater;
            } else {
                echo 'Sorry, not enough money'.PHP_EOL;
            };
            break;
        case 'Soda':
            if ($Money >= $priceSoda){
                echo 'Purchased soda'.PHP_EOL;
                $Money -= $priceSoda;
            } else {
                echo 'Sorry, not enough money'.PHP_EOL;
            };
            break;
        case 'Crisps':
            if ($Money >= $priceCrisps){
                echo 'Purchased crisps'.PHP_EOL;
                $Money -= $priceCrisps;
            } else {
                echo 'Sorry, not enough money'.PHP_EOL;
            };
            break;
        default:
            echo 'Invalid product';
            break;
    };
    $inputProducts = readline();
};

printf('Change: %.2f',$Money);