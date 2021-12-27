<?php
function getPlayerScore($cards)
{
    $sum = 0;

    foreach ($cards as $card) {
        $currentCardSum = 1;
        for ($i = 0; $i < strlen($card); $i++) {
            $currCard = $card[$i];
            if (strlen($card) > 2 && $i == 0) {
                $currCard = $card[$i] . $card[$i + 1];
                $i++;
            }
            switch ($currCard) {
                case 'J':
                    $currentCardSum *= 11;
                    break;
                case 'Q':
                    $currentCardSum *= 12;
                    break;
                case 'K':
                    $currentCardSum *= 13;
                    break;
                case 'A':
                    $currentCardSum *= 14;
                    break;
                case 'S':
                    $currentCardSum *= 4;
                    break;
                case 'H':
                    $currentCardSum *= 3;
                    break;
                case 'D':
                    $currentCardSum *= 2;
                    break;
                case 'C':
                    $currentCardSum *= 1;
                    break;
                default:
                    $currentCardSum *= intval($card);
                    break;
            }
        }
        $sum += $currentCardSum;
    }
    return $sum;
}

$playersCards = [];
$playerAndCards = readline();

while ($playerAndCards !== 'JOKER') {
    $playerAndCards = explode(': ', $playerAndCards);
    $name = $playerAndCards[0];
    $cards = explode(', ', $playerAndCards[1]);
    if (!key_exists($name, $playersCards)) {
        $playersCards[$name] = [];
    }
    $playersCards[$name] = array_unique(array_merge($playersCards[$name], $cards));;
    $playerAndCards = readline();
}

foreach ($playersCards as $player => $cards) {
    $score = getPlayerScore($cards);
    echo "$player: $score" . PHP_EOL;
}