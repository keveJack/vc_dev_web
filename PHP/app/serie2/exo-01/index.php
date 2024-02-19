<?php

// tableau simple :
$tableau[0] = 2023;
$tableau[1] = "DEVWEB-18-S2";
$tableau[] = 11.12;

// tableau à 2 dimensions :
$tab[0][0] = 12;
$tab[0][1] = "tv";
$tab[1][0] = 1245.678;
$tab[1][1] = "bye";

// tableau associatif :
$toto["Nom"] = "le nom de famille de Toto...";
$toto["Age"] = 12;
$toto["Adresse"] = "22 rue des bois fleuri";

// Affichage du tableau simple
echo "Tableau simple : <br>";
foreach ($tableau as $value) {
    echo $value . "<br>";
}

// Affichage du tableau à 2 dimensions
echo "<br>Tableau à 2 dimensions : <br>";
foreach ($tab as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

// Affichage du tableau associatif
echo "<br>Tableau associatif : <br>";
foreach ($toto as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

?>
