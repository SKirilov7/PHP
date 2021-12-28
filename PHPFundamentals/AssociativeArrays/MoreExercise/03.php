<?php

function addPlayerOrUpdate($arr, $name, $pos, $skill)
{
    if (!key_exists($name, $arr)) {
        $arr[$name] = [];
    }
    if (!key_exists($pos, $arr[$name])) {
        $arr[$name][$pos] = 0;
    }
    $arr[$name][$pos] = ($skill > $arr[$name][$pos]) ? $skill : $arr[$name][$pos];
    return $arr;
}

function findFirstEqualPosition($arr, $playerOne, $playerTwo)
{
    if (key_exists($playerOne, $arr) && key_exists($playerTwo, $arr)) {
        foreach ($arr[$playerOne] as $pos => $skill) {
            foreach ($arr[$playerTwo] as $posTwo => $skillSecond) {
                if ($pos == $posTwo) {
                    return $pos;
                }
            }
        }
    }
    return false;
}

function duelPlayers($arr, $firstPlayer, $secondPlayer, $pos)
{
    $firstPlayerTotalSkill = array_sum($arr[$firstPlayer]);
    $secondPlayerTotalSkill = array_sum($arr[$secondPlayer]);
    if ($firstPlayerTotalSkill > $secondPlayerTotalSkill) {
        unset ($arr[$secondPlayer]);
    } else if ($firstPlayerTotalSkill < $secondPlayerTotalSkill) {
        unset ($arr[$firstPlayer]);
    }
    return $arr;
}

$players = [];
$playerInfo = readline();

while ($playerInfo !== 'Season end') {
    $isDuelOrNot = strpos($playerInfo, 'vs');
    if (!$isDuelOrNot) {
        $playerInfo = explode(' -> ', $playerInfo);
        $playerName = $playerInfo[0];
        $playerPos = $playerInfo[1];
        $playerSkill = intval($playerInfo[2]);
        $players = addPlayerOrUpdate($players, $playerName, $playerPos, $playerSkill);
    } else {
        $playerInfo = explode(' vs ', $playerInfo);
        $firstPlayer = $playerInfo[0];
        $secondPlayer = $playerInfo[1];
        $equalPos = findFirstEqualPosition($players, $firstPlayer, $secondPlayer);
        if ($equalPos) {
            $players = duelPlayers($players, $firstPlayer, $secondPlayer, $equalPos);
        }
    }
    $playerInfo = readline();
}

uksort($players, function ($key1, $key2) use ($players) {
    $firstPlayerPower = array_sum($players[$key1]);
    $secondPlayerPower = array_sum($players[$key2]);
    if ($firstPlayerPower == $secondPlayerPower) {
        return $key1 <=> $key2;
    }
    return $secondPlayerPower <=> $firstPlayerPower;
});

foreach ($players as $playerName => $posAndSkill) {
    $totalPower = array_sum($posAndSkill);
    echo "$playerName: $totalPower skill" . PHP_EOL;
    uksort($posAndSkill, function ($key1, $key2) use ($posAndSkill) {
        if ($posAndSkill[$key1] == $posAndSkill[$key2]) {
            return $key1 <=> $key2;
        }
        return $posAndSkill[$key2] <=> $posAndSkill[$key1];
    });
    foreach ($posAndSkill as $position => $skill) {
        echo "- $position <::> $skill" . PHP_EOL;
    }
}