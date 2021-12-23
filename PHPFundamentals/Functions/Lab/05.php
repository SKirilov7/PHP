<?php
function findTotalSumProducts($name, $quantity)
{
    switch (strtolower($name)) {
        case 'water':
            return $quantity * 1.00;
        case 'coffee':
            return $quantity * 1.50;
        case 'coke':
            return $quantity * 1.40;
        case 'snacks':
            return $quantity * 2.00;
        default:
            return 0;
    }
}


$productName = readline();
$productQuantity = intval(readline());
$returnValue = number_format(findTotalSumProducts($productName, $productQuantity), 2);
echo $returnValue;
