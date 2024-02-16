<?php
// Fonction pour afficher les nombres pairs de 2 à n
function afficherNombresPairs($nombre)
{
    // Vérifie si le nombre est supérieur ou égal à 2
    if ($nombre >= 2) {
        // Boucle for pour afficher les nombres pairs de 2 à n
        for ($i = 2; $i <= $nombre; $i += 2) {
            echo $i . "-";
        }
    } else {
        echo "Veuillez entrer un nombre supérieur ou égal à 2.";
    }
}

// Appel de la fonction avec un exemple (remplacez 20 par le nombre de votre choix)
afficherNombresPairs(20);
