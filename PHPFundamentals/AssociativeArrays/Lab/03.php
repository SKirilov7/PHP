<?php
$elements = explode(' ', readline());
$occurrences = [];

for ($i = 0; $i < count($elements); $i++) {
    $element = strtolower($elements[$i]);
    if (!key_exists($element, $occurrences)) {
        $occurrences[$element] = 0;
    }
    $occurrences[$element]++;
}

foreach ($occurrences as $key => $value) {
    if ($value % 2 !== 0) {
        echo "$key ";
    }
}