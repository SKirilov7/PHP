<?php
function checkIfItemIsObtained($currentShards, $arrayElements)
{
    if ($currentShards == 'shards' && $arrayElements[$currentShards] >= 250) {
        echo 'Shadowmourne obtained!' . PHP_EOL;
    } else if ($currentShards == 'fragments' && $arrayElements[$currentShards] >= 250) {
        echo 'Valanyr obtained!' . PHP_EOL;
    } else if ($currentShards == 'motes' && $arrayElements[$currentShards] >= 250) {
        echo 'Dragonwrath obtained!' . PHP_EOL;
    } else {
        return false;
    }
    return true;
}

$keyElements = ['motes' => 0, 'shards' => 0, 'fragments' => 0];
$junkElements = [];

$itemsObtained = explode(' ', readline());

while (true) {
    $isObtained = false;
    for ($i = 0; $i < count($itemsObtained); $i += 2) {
        $item = strtolower($itemsObtained[$i + 1]);
        $quantity = intval($itemsObtained[$i]);
        if ($item == 'shards' || $item == 'motes' || $item == 'fragments') {

            $keyElements[$item] += $quantity;
            if (checkIfItemIsObtained($item, $keyElements)) {
                $keyElements[$item] -= 250;
                $isObtained = true;
                break;
            }
        } else {
            if (!key_exists($item, $junkElements)) {
                $junkElements[$item] = 0;
            }
            $junkElements[$item] += $quantity;
        }
    }
    if ($isObtained) {
        break;
    }
    $itemsObtained = explode(' ', readline());
}

uksort($keyElements, function ($key1, $key2) use ($keyElements) {
    $firstQuantity = $keyElements[$key1];
    $secondQuantity = $keyElements[$key2];
    if ($firstQuantity == $secondQuantity) {
        return $key1 <=> $key2;
    }
    return $secondQuantity <=> $firstQuantity;
});
ksort($junkElements);

$allItems = array_merge($keyElements, $junkElements);

foreach ($allItems as $item => $quantity) {
    echo "$item: $quantity" . PHP_EOL;
}
