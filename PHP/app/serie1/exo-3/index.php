<?php
// Fonction pour afficher tous les nombres de n à 1
function afficherLesNombresRebour($nombre)
{
    // Vérifie si le nombre est positif
    if ($nombre > 0) {
        // Boucle for pour afficher les nombres de n à 1
        for ($i = $nombre; $i >= 1; $i--) {
            echo $i . " ";
        }
    } else {
        echo "Veuillez entrer un nombre positif.";
    }
}

// Appel de la fonction avec un exemple (remplacez 10 par le nombre de votre choix)
afficherLesNombresRebour(10);
