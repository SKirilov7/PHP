<?php
$cityAndPopulation = explode(', ', readline());
$cities = [];

for ($i = 0; $i < count($cityAndPopulation); $i += 2) {
    $city = $cityAndPopulation[$i];
    $population = intval($cityAndPopulation[$i + 1]);
    if (!key_exists($city, $cities)) {
        $cities[$city] = $population;
    } else {
        $cities[$city] += $population;
    }
}

foreach ($cities as $city => $population) {
    echo "$city => $population" . PHP_EOL;
}