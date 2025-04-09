<?php
require_once 'AttackPokemon.php';
require_once 'Pokemon.php';
require_once 'PokemonFeu.php';
require_once 'PokemonEau.php';
require_once 'PokemonPlante.php';

$atk1 = new AttackPokemon(5, 10, 2, 30);
$atk2 = new AttackPokemon(6, 12, 2, 20); 


$pokemon1 = new PokemonFeu("Charizard", "https://img.pokemondb.net/artwork/large/charizard.jpg", 100, $atk1);
$pokemon2 = new PokemonEau("Blastoise", "https://img.pokemondb.net/artwork/large/blastoise.jpg", 100, $atk2);

echo "<h2>Présentation des combattants :</h2>";
$pokemon1->whoAmI();
$pokemon2->whoAmI();

echo "<h2>Début du combat !</h2>";
$round = 1;
while (!$pokemon1->isDead() && !$pokemon2->isDead()) {
    echo "<strong>Tour $round :</strong><br>";
    $pokemon1->attack($pokemon2);
    if (!$pokemon2->isDead()) {
        $pokemon2->attack($pokemon1);
    }
    echo "<br>";
    $round++;
}

echo "<h2>Résultat :</h2>";
if ($pokemon1->isDead() && $pokemon2->isDead()) {
    echo "Égalité ! Les deux Pokémons sont K.O.";
} elseif ($pokemon1->isDead()) {
    echo "{$pokemon2->getNom()} a gagné avec {$pokemon2->getHp()} HP restants.";
} else {
    echo "{$pokemon1->getNom()} a gagné avec {$pokemon1->getHp()} HP restants.";
}
?>
