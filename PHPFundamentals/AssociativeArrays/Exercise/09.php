<?php
function switchTeams($arrayUsers, $switchSide, $user)
{
    $isSuchUser = false;
    foreach ($arrayUsers as $side => $users) {
        if (in_array($user, $users) && $side !== $switchSide) {
            $isSuchUser = true;
            $index = array_search($user, $users);
            array_splice($arrayUsers[$side], $index, 1);
            $arrayUsers[$switchSide][] = $user;
            echo "$user joins the $switchSide side!" . PHP_EOL;
            break;
        } else if (in_array($user, $users) && $side == $switchSide) {
            $isSuchUser = true;
            break;
        }
    }
    if (!$isSuchUser) {
        $arrayUsers[$switchSide][] = $user;
        echo "$user joins the $switchSide side!" . PHP_EOL;
    }
    return $arrayUsers;
}

function checkIfUserExists($array, $user)
{
    $isExisting = false;
    foreach ($array as $side => $users) {
        if (in_array($user, $users)) {
            $isExisting = true;
            break;
        }
    }
    return $isExisting;
}


$forceUsersSides = [];

$command = readline();

while ($command !== 'Lumpawaroo') {
    $isPipeInCommand = strpos($command, '|');
    if ($isPipeInCommand) {
        $command = explode(' | ', $command);
        $forceSide = $command[0];
        $forceUser = $command[1];
        if (!checkIfUserExists($forceUsersSides, $forceUser)) {

            if (!key_exists($forceSide, $forceUsersSides)) {
                $forceUsersSides[$forceSide] = [];
            }
            $forceUsersSides[$forceSide][] = $forceUser;
        }
    } else {
        $command = explode(' -> ', $command);
        $forceSide = $command[1];
        $forceUser = $command[0];
        $forceUsersSides = switchTeams($forceUsersSides, $forceSide, $forceUser);
    }
    $command = readline();
}

uksort($forceUsersSides, function ($key1, $key2) use ($forceUsersSides) {
    $firstCount = count($forceUsersSides[$key1]);
    $secondCount = count($forceUsersSides[$key2]);
    if ($firstCount == $secondCount) {
        return $key1 <=> $key2;
    }
    return $secondCount <=> $firstCount;
});

foreach ($forceUsersSides as $side => $users) {
    if (count($users) > 0) {
        sort($users);
        $membersCount = count($users);
        echo "Side: $side, Members: $membersCount" . PHP_EOL;
        foreach ($users as $user) {
            echo "! $user" . PHP_EOL;
        };
    }
}