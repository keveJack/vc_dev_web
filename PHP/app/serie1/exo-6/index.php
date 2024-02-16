<?php
// Fonction pour afficher les puissances de 2 de 0 à 16 avec une boucle while
function afficherPuissancesDeDeux($nombre)
{
    // Vérifie si le nombre est positif ou nul
    if ($nombre >= 0) {
        echo "Puissances de 2 de 0 à 16 avec une boucle while : <br>";
        echo "<ul>";
        $i = 0;
        // Boucle while pour afficher les puissances de 2 de 0 à 16
        while ($i <= $nombre && $i <= 16) {
            $puissance = pow(2, $i);
            echo "<li>2^$i = $puissance</li>";
            $i++;
        }
        echo "</ul>";
    } else {
        echo "Veuillez entrer un nombre positif ou nul.";
    }
}

// Appel de la fonction pour afficher les puissances de 2 de 0 à 16
afficherPuissancesDeDeux(16);
