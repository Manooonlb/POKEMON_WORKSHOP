<?php
function sayHello(string $name = 'Bulbi') : string
{
    // echo "Hello $name\n";
    return "Hello $name";
}



function getPokemonType(string $pokemon) : ?string 
{
  
    $typeOfPokemon = [
        "plante" => ["Bulbizarre","Mystherbe", "Chetiflore"],
        "eau" => ["Carapuce", "Stari", "Magicarpe"],
        "feu" => ["Salamèche"],
        "sol" => ["Sabelette", "Taupiqueur"],
    ];

    foreach ($typeOfPokemon as $type => $pokemonList) {
        if (in_array($pokemon, $pokemonList)){
            return $type;
        }
    };
return null;

};


function fight(string $pokemon1, string $pokemon2, array $typeOfPokemon) : string 
{
    $pokemon1Type = getPokemonType($pokemon1);
    $pokemon2Type = getPokemonType($pokemon2);


    if ($pokemon1Type == "eau" && $pokemon2Type == "feu") {
        return " $pokemon1 à gagné contre $pokemon2\n";
    } elseif ($pokemon1Type == "eau" && $pokemon2Type == "sol") {
        return " $pokemon1 à gagné contre $pokemon2\n";
    } elseif ($pokemon1Type == "eau" && $pokemon2Type == "plante") {
        return " $pokemon1 à perdu contre $pokemon2\n";
    } elseif ($pokemon1Type == "feu" && $pokemon2Type == "sol") {
        return " $pokemon1 à gagné contre $pokemon2\n";
    } elseif ($pokemon1Type == "feu" && $pokemon2Type == "plante"){
        return " $pokemon1 à gagné contre $pokemon2\n";
    }

    return  " Match nul !\n";
    
}; 

?>