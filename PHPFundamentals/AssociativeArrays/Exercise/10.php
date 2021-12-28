<?php
function printObjectsGiven($arr, $delimiter)
{
    $result = '';
    if ($delimiter == '|'){
        $result .= "Results:".PHP_EOL;
        foreach ($arr as $name => $points){
            $result .= "$name | $points".PHP_EOL;
        }
    } else {
        $result .= "Submissions:".PHP_EOL;
        foreach ($arr as $language => $participants){
            $result .= "$language - $participants".PHP_EOL;
        }
    }
    return $result;
}

$studentsPoints = [];
$studentsLanguages = [];

$command = readline();

while ($command !== 'exam finished') {
    $command = explode('-', $command);
    $username = $command[0];
    $language = $command[1];
    if ($language == 'banned' && key_exists($username, $studentsPoints)) {
        unset ($studentsPoints[$username]);
        $command = readline();
        continue;
    }
    $points = intval($command[2]);
    if (!key_exists($username, $studentsPoints) || $studentsPoints[$username] < $points) {
        $studentsPoints[$username] = $points;
    }
    if (!key_exists($language, $studentsLanguages)) {
        $studentsLanguages[$language] = 0;
    }
    $studentsLanguages[$language]++;
    $command = readline();
}

uksort($studentsPoints, function ($key1, $key2) use ($studentsPoints) {
    $firstPoints = $studentsPoints[$key1];
    $secondPoints = $studentsPoints[$key2];
    if ($firstPoints == $secondPoints) {
        return $key1 <=> $key2;
    }
    return $secondPoints <=> $firstPoints;
});
uksort($studentsLanguages, function ($key1, $key2) use ($studentsLanguages) {
    $firstCount = $studentsLanguages[$key1];
    $secondCount = $studentsLanguages[$key2];
    if ($firstCount == $secondCount) {
        return $key1 <=> $key2;
    }
    return $secondCount <=> $firstCount;
});

echo printObjectsGiven($studentsPoints, '|');
echo printObjectsGiven($studentsLanguages, '-');