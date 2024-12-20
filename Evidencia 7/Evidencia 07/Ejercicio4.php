<?php
$animales = [
    ["Ballena", "ballena.svg", "https://es.wikipedia.org/wiki/Balaenidae"],
    ["Caballito de mar", "caballito-mar.svg", "https://es.wikipedia.org/wiki/Hippocampus"],
    ["Camello", "camello.svg", "https://es.wikipedia.org/wiki/Camelus"],
    ["Cebra", "cebra.svg", "https://es.wikipedia.org/wiki/Cebra"],
    ["Elefante", "elefante.svg", "https://es.wikipedia.org/wiki/Elephantidae"],
    ["Hipopótamo", "hipopotamo.svg", "https://es.wikipedia.org/wiki/Hippopotamidae"],
    ["Jirafa", "jirafa.svg", "https://es.wikipedia.org/wiki/Giraffa_camelopardalis"],
    ["León", "leon.svg", "https://es.wikipedia.org/wiki/Panthera_leo"],
    ["Leopardo", "leopardo.svg", "https://es.wikipedia.org/wiki/Panthera_pardus"],
    ["Medusa", "medusa.svg", "https://es.wikipedia.org/wiki/Medusa_(animal)"],
    ["Mono", "mono.svg", "https://es.wikipedia.org/wiki/Mono"],
    ["Oso", "oso.svg", "https://es.wikipedia.org/wiki/Ursidae"],
    ["Oso blanco", "oso-blanco.svg", "https://es.wikipedia.org/wiki/Ursus_maritimus"],
    ["Pájaro", "pajaro.svg", "https://es.wikipedia.org/wiki/Aves"],
    ["Pingüino", "pinguino.svg", "https://es.wikipedia.org/wiki/Spheniscidae"],
    ["Rinoceronte", "rinoceronte.svg", "https://es.wikipedia.org/wiki/Rhinocerotidae"],
    ["Serpiente", "serpiente.svg", "https://es.wikipedia.org/wiki/Serpentes"],
    ["Tigre", "tigre.svg", "https://es.wikipedia.org/wiki/Panthera_tigris"],
    ["Tortuga marina", "tortuga-marina.svg", "https://es.wikipedia.org/wiki/Chelonioidea"],
    ["Tortuga", "tortuga.svg", "https://es.wikipedia.org/wiki/Testudines"]
];

$animal = rand(0, count($animales) - 1);

print "<h2>" . $animales[$animal][0] . "</h2>\n";
print "<p><img src=\"img/animales/" . $animales[$animal][1] . "\" alt=\"" . $animales[$animal][0] . "\" height=\"250\"></p>\n";
print "<p>Más: <a href=\"" . $animales[$animal][2] . "\">información sobre este animal</a> en la Wikipedia</p>\n";
?>
