<?php
function addDragon($arrDragons, $type, $name, $damage, $health, $armor)
{
    $arrDragons[$type][$name] = [$damage, $health, $armor];
    return $arrDragons;
}

$dragons = [];
$numberDragons = intval(readline());

for ($i = 0; $i < $numberDragons; $i++) {
    $dragonsInfo = explode(' ', readline());
    $dragonType = $dragonsInfo[0];
    $dragonName = $dragonsInfo[1];
    $dragonsDamage = (!ctype_digit($dragonsInfo[2])) ? 45 : intval($dragonsInfo[2]);
    $dragonsHealth = (!ctype_digit($dragonsInfo[3])) ? 250 : intval($dragonsInfo[3]);
    $dragonsArmor = (!ctype_digit($dragonsInfo[4])) ? 10 : intval($dragonsInfo[4]);

    $dragons = addDragon($dragons, $dragonType, $dragonName, $dragonsDamage, $dragonsHealth, $dragonsArmor);

}

$dragonsTypesTotalAttributes = [];
$toPrint = [];
foreach ($dragons as $dragonType => $dragonsAttributes) {
    $damageForType = 0;
    $armorForType = 0;
    $healthForType = 0;
    $counterDragons = 0;
    ksort($dragonsAttributes);
    foreach ($dragonsAttributes as $dragonName => $dragonPowers) {
        $damageForType += $dragonPowers[0];
        $healthForType += $dragonPowers[1];
        $armorForType += $dragonPowers[2];
        $counterDragons++;
        $toPrint[$dragonType][] = "-$dragonName -> damage: $dragonPowers[0], health: $dragonPowers[1], armor: $dragonPowers[2]";
    }
    $damageForType = round($damageForType / $counterDragons, 2);
    $healthForType = round($healthForType / $counterDragons, 2);
    $armorForType = round($armorForType / $counterDragons, 2);
    $dragonsTypesTotalAttributes[$dragonType] = [$damageForType, $healthForType, $armorForType];
}


foreach ($dragonsTypesTotalAttributes as $dragonType => $dragonPower) {
    printf("%s::(%.2f/%.2f/%.2f)", $dragonType, $dragonPower[0], $dragonPower[1], $dragonPower[2]);
    echo PHP_EOL;
    foreach ($toPrint[$dragonType] as $string) {
        echo $string . PHP_EOL;
    }
}