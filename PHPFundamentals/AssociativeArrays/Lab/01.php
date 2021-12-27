<?php
$string = readline();
$occurrences = [];

for ($i = 0; $i < strlen($string); $i++) {
    if (!key_exists($string[$i], $occurrences)) {
        $occurrences[$string[$i]] = 0;
    }
    $occurrences[$string[$i]]++;
}

foreach ($occurrences as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}
