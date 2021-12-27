<?php
$productsPrice = [];
$productsQuantity = [];

$currProductInfo = readline();

while ($currProductInfo !== 'buy') {
    $currProductInfo = explode(' ', $currProductInfo);
    $productName = $currProductInfo[0];
    $price = floatval($currProductInfo[1]);
    $quantity = floatval($currProductInfo[2]);
    if (!key_exists($productName, $productsPrice)) {
        $productsPrice[$productName] = 0;
        $productsQuantity[$productName] = 0;
    }
    $productsPrice[$productName] = $price;
    $productsQuantity[$productName] += $quantity;
    $currProductInfo = readline();
}

foreach ($productsPrice as $product => $price) {
    $quantity = $productsQuantity[$product];
    $totalPrice = $quantity * $price;
    printf('%s -> %.2f', $product, $totalPrice);
    echo PHP_EOL;
}
