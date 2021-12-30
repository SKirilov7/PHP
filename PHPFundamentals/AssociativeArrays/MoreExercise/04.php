<?php
function addDwarf($arrDwarfs, $name, $color, $physic)
{
    if (!key_exists($color, $arrDwarfs)) {
        $arrDwarfs[$color] = [];
    }
    if (!key_exists($name, $arrDwarfs[$color])) {
        $arrDwarfs[$color][$name] = $physic;

    } else {
        if ($physic > $arrDwarfs[$color][$name]) {
            $arrDwarfs[$color][$name] = $physic;
        }
    }
    return $arrDwarfs;
}
function sortAllPhysics($arrDwarfs){
    $allPhysics = [];

    foreach ($arrDwarfs as $color => $dwarfInfo) {
        foreach ($dwarfInfo as $name => $physic) {
            if (!in_array($physic, $allPhysics)) {
                $allPhysics[] = $physic;
            }
        }
    }
    rsort($allPhysics);
    return $allPhysics;
}

$dwarfInfo = readline();
$dwarfs = [];

while ($dwarfInfo !== 'Once upon a time') {
    $dwarfInfo = explode(' <:> ', $dwarfInfo);
    $dwarfs = addDwarf($dwarfs, $dwarfInfo[0], $dwarfInfo[1], intval($dwarfInfo[2]));
    $dwarfInfo = readline();
}

$arrPhysics = sortAllPhysics($dwarfs);

uksort($dwarfs, function ($key1, $key2) use ($dwarfs) {
    $firstCount = count($dwarfs[$key1]);
    $secondCount = count($dwarfs[$key2]);
    return $secondCount <=> $firstCount;
});


foreach ($arrPhysics as $physic) {
    foreach ($dwarfs as $color => $dwarfInfo) {
        ksort($dwarfInfo);
        foreach ($dwarfInfo as $name => $dwarfPhysic) {
            if ($physic == $dwarfPhysic) {
                echo "($color) $name <-> $dwarfPhysic" . PHP_EOL;
            }
        }
    }
}