<?php
$peopleCount = intval(readline());
$capacityOneTurn = intval(readline());

$minimumTurns = ceil($peopleCount / $capacityOneTurn);

echo $minimumTurns;