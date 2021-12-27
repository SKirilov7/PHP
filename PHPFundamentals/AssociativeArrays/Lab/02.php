<?php
$arrNumbers = explode(' ', readline());
$occurrences = [];

for ($i = 0; $i < count($arrNumbers); $i++) {
    if (!key_exists($arrNumbers[$i], $occurrences)) {
        $occurrences[$arrNumbers[$i]] = 0;
    }
    $occurrences[$arrNumbers[$i]]++;
}

ksort($occurrences);
foreach ($occurrences as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}