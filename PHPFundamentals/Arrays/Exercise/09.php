<?php
$gifts = explode(' ', readline());

$command = readline();

while ($command !== 'No Money') {
    $command = explode(' ', $command);
    $currCommand = $command[0];
    $giftName = $command[1];

    if ($currCommand == 'OutOfStock' && in_array($giftName, $gifts)) {
        while (in_array($giftName, $gifts)) {
            $searchedIndex = array_search($giftName, $gifts);
            $gifts[$searchedIndex] = 'None';
        };
    } else if ($currCommand == 'Required') {
        $index = intval($command[2]);
        if ($index >= 0 && $index < count($gifts)) {
            $gifts[$index] = $giftName;
        };

    } else if ($currCommand == 'JustInCase') {
        $gifts[count($gifts) - 1] = $giftName;
    };
    $command = readline();
};

foreach ($gifts as $gift){
    if ($gift !== 'None'){
        echo "$gift ";
    };
};
