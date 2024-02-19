<?php
// Définition du tableau
$tableauNombre = [0, 1, 2, 3, 4, 5, 6];

// Calcul de la somme des valeurs du tableau
$somme = array_sum($tableauNombre);

// Calcul de la moyenne des valeurs du tableau
$moyenne = $somme / count($tableauNombre);

// Calcul de l'écart-type des valeurs du tableau
$ecartType = 0;
foreach ($tableauNombre as $nombre) {
    $ecartType += pow($nombre - $moyenne, 2);
}
$ecartType = sqrt($ecartType / count($tableauNombre));

// Affichage des résultats
echo "Somme des valeurs du tableau : " . $somme . "\n";
echo "Moyenne des valeurs du tableau : " . $moyenne . "\n";
echo "Écart-type des valeurs du tableau : " . $ecartType . "\n";
