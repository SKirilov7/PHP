<?php
$parkingLot = [];
$numberCommands = intval(readline());

for ($i = 0; $i < $numberCommands; $i++) {
    $commands = explode(' ', readline());
    $currCommand = $commands[0];
    $username = $commands[1];
    if ($currCommand == 'register') {
        $licensePlate = $commands[2];
        if (key_exists($username, $parkingLot)) {
            echo "ERROR: already registered with plate number $parkingLot[$username]" . PHP_EOL;
            continue;
        }
        $parkingLot[$username] = $licensePlate;
        echo "$username registered $licensePlate successfully" . PHP_EOL;
    } else {

        if (!key_exists($username, $parkingLot)) {
            echo "ERROR: user $username not found" . PHP_EOL;
            continue;
        }
        unset($parkingLot[$username]);
        echo "$username unregistered successfully" . PHP_EOL;
    }
}

foreach ($parkingLot as $user => $licensePlate) {
    echo "$user => $licensePlate" . PHP_EOL;
}