<?php
$numsArray = explode(' ', readline());
$longestStreak = 0;
$longestStreakElements = [];

for ($i = 0; $i < count($numsArray); $i++) {
    $currentElement = $numsArray[$i];
    $index = $i + 1;
    $currentStreak = 1;
    $currentStreakElements = [$numsArray[$i]];
    while ($index < count($numsArray) && $currentElement == $numsArray[$index]) {
        $index++;
        $currentStreak++;
        $currentStreakElements[] = $currentElement;
    };
    if ($currentStreak > $longestStreak) {
        $longestStreak = $currentStreak;
        $longestStreakElements = $currentStreakElements;
    };
};

echo implode(' ', $longestStreakElements);