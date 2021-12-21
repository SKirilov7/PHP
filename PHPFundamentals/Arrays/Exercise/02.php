<?php
$firstArray = explode(' ', readline());
$secondArray = explode(' ', readline());

for ($i = 0; $i < count($secondArray); $i++) {
    $currItem = $secondArray[$i];
    if (in_array($currItem, $firstArray)) {
        echo "$currItem ";
    };
};
