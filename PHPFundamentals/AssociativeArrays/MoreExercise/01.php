<?php
$juiceAndQuantity = readline();
$juices = [];
$bottles = [];

while ($juiceAndQuantity !== 'End'){
    $juiceAndQuantity = explode(' => ', $juiceAndQuantity);
    $juiceType = $juiceAndQuantity[0];
    $quantity = intval($juiceAndQuantity[1]);
    if (!key_exists($juiceType, $juices)){
        $juices[$juiceType] = 0;
    }
    $juices[$juiceType] += $quantity;
    while ($juices[$juiceType] >= 1000){
        if (!key_exists($juiceType, $bottles)){
            $bottles[$juiceType] = 0;
        }
        $bottles[$juiceType] ++;
        $juices[$juiceType] -= 1000;
    }

    $juiceAndQuantity = readline();
}

foreach($bottles as $bottleType => $quantity){
    echo "$bottleType => $quantity".PHP_EOL;
}