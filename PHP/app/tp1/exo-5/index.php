<?php
// Déclaration de la durée en secondes
$duree = 6700;

// Conversion de la durée en heures, minutes et secondes
$heures = floor($duree / 3600);
$minutes = floor(($duree % 3600) / 60);
$secondes = $duree % 60;

// Affichage du résultat au format attendu
$resultat = "$heures h $minutes m $secondes s";

// Affichage du résultat en PHP
echo "<p>Résultat en PHP : $resultat</p>";

// Génération d'un popup avec JavaScript pour afficher le résultat
echo "<script>alert('$resultat');</script>";
