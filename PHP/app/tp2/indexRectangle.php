<?php
declare(strict_types=1);
include_once('rectangle.class.php');

// Création d'un objet Rectangle
$rectangle = new Rectangle(5, 10);

// Calcul du périmètre du rectangle
$perimetre = $rectangle->calculerPerimetre();

// Calcul de la surface du rectangle
$surface = $rectangle->calculerSurface();

// Vérification si c'est un losange
$estLosange = $rectangle->estUnLosange() ? "Oui" : "Non";

// Affichage des résultats
echo "Le périmètre du rectangle est : $perimetre <br>";
echo "La surface du rectangle est : $surface <br>";
echo "Est-ce un losange ? : $estLosange <br>";
?>
