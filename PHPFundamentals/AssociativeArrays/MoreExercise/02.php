<?php
$alphabeticalOrderProducts = [];
$productsAndQuantity = [];

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $newProduct = explode(' : ', readline());
    $productName = $newProduct[0];
    $productQuantity = floatval($newProduct[1]);
    $productsAndQuantity[$productName] = $productQuantity;
    $firstLetter = $productName[0];
    if (!key_exists($firstLetter, $alphabeticalOrderProducts)) {
        $alphabeticalOrderProducts[$firstLetter] = [];
    }
    $alphabeticalOrderProducts[$firstLetter][] = $productName;
}

ksort($alphabeticalOrderProducts);

foreach ($alphabeticalOrderProducts as $startingLetter => $productsNames) {
    sort($productsNames);
    echo $startingLetter . PHP_EOL;
    foreach ($productsNames as $product) {
        echo "$product: $productsAndQuantity[$product]" . PHP_EOL;
    }
}