<?php
function summarizePokemons($pokemons, $removedPokemon)
{
    for ($i = 0; $i < count($pokemons); $i++) {
        if ($pokemons[$i] <= $removedPokemon) {
            $pokemons[$i] += $removedPokemon;
        } else {
            $pokemons[$i] -= $removedPokemon;
        }
    }
    return $pokemons;
}

$pokemonsDistance = array_map('intval', explode(' ', readline()));
$sumRemovedPokemons = 0;

while ($pokemonsDistance) {
    $index = intval(readline());

    if ($index < 0) {
        $pokemonToRemove = $pokemonsDistance[0];
        $pokemonsDistance[0] = $pokemonsDistance[count($pokemonsDistance) - 1];
    } else if ($index >= count($pokemonsDistance)) {
        $pokemonToRemove = $pokemonsDistance[count($pokemonsDistance) - 1];
        $pokemonsDistance[count($pokemonsDistance) - 1] = $pokemonsDistance[0];
    } else {
        $pokemonToRemove = $pokemonsDistance[$index];
        array_splice($pokemonsDistance, $index, 1);
    }
    $sumRemovedPokemons += $pokemonToRemove;
    $pokemonsDistance = summarizePokemons($pokemonsDistance, $pokemonToRemove);

}

echo $sumRemovedPokemons;