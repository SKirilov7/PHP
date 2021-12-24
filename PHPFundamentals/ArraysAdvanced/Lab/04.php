<?php
$n = intval(readline());

$arrProducts = [];
for ($i = 0; $i < $n; $i++) {
    $arrProducts[] = readline();
}
sort($arrProducts);
foreach (array_values($arrProducts) as $i => $val) {
    $i = $i + 1;
    echo "$i.$val" . PHP_EOL;
}

