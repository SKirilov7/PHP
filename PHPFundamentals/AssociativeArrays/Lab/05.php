<?php
$n = intval(readline());
$synonyms = [];

for ($i = 0; $i < $n * 2; $i += 2) {
    $word = readline();
    $synonym = readline();
    if (!key_exists($word, $synonyms)) {
        $synonyms[$word] = [];
    }
    $synonyms[$word][] = $synonym;
}

uksort($synonyms, function ($key1, $key2) use ($synonyms) {
    $firstCount = count($synonyms[$key1]);
    $secondCount = count($synonyms[$key2]);
    if ($firstCount == $secondCount) {
        return $key1 <=> $key2;
    }
    return $secondCount <=> $firstCount;
});
foreach ($synonyms as $key => $value) {
    echo "$key - " . implode(', ', $value) . PHP_EOL;
}