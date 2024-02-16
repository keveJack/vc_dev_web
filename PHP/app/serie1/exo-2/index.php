<?php
// Fonction pour afficher tous les nombres de 1 à n
function afficherLesNombres($nombre)
{
    // Vérifie si le nombre est positif
    if ($nombre > 0) {
        // Boucle for pour afficher les nombres de 1 à n
        for ($i = 1; $i <= $nombre; $i++) {
            echo $i . " ";
        }
    } else {
        echo "Veuillez entrer un nombre positif.";
    }
}

// Appel de la fonction avec un exemple (remplacez 10 par le nombre de votre choix)
afficherLesNombres(10);
