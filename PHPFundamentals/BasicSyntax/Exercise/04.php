<?php
$startNum = intval(readline());
$endNum = intval(readline());
$totalSum = 0;
for ($i = $startNum; $i <= $endNum; $i++) {
    echo "$i ";
    $totalSum += $i;
}
echo PHP_EOL;
echo "Sum: $totalSum";