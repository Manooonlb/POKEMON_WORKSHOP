<?php
include 'header.php';
$firstArena = 'Argenta';
$trainerName = 'yy';
$nameOfFirstPokemon = 'PIKACHU';

echo $nameOfFirstPokemon;

$levelOfFirstPokemon = 10;
$ko = false;

$nameOfFirstPokemon = "bulbisard";
echo $nameOfFirstPokemon;

$levelOfFirstPokemon = $levelOfFirstPokemon + 1;
echo $levelOfFirstPokemon;

$hometown = 'Shanghai';
echo $hometown;
echo "je m'appelle " . $trainerName . ' mon premier Pokemon est ' . $nameOfFirstPokemon . " où est la première arène svp ? \n";

$typeOfPokemon = [
    "plante" => ["Bulbizarre","Mystherbe", "Chetiflore"],
    "eau" => ["Carapuce", "Stari", "Magicarpe"],
    "feu" => ["Salamèche"],
    "sol" => ["Sabelette", "Taupiqueur"],

];

require 'arena.php';
include 'footer.php';
include 'functions.php';

echo sayHello();
echo fight('Salamèche', 'Mystherbe',$typeOfPokemon);
