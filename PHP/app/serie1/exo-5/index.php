<?php
// Fonction pour afficher les puissances de 2 de 0 à nombre
function afficherPuissancesDeDeux($nombre)
{
    // Vérifie si le nombre est positif
    if ($nombre >= 0) {
        echo "Puissances de 2 de 0 à $nombre : <br>";
        echo "<ul>";
        // Boucle for pour afficher les puissances de 2 de 0 à nombre
        for ($i = 0; $i <= $nombre; $i++) {
            $puissance = pow(2, $i);
            echo "<li>2^$i = $puissance</li>";
        }
        echo "</ul>";
    } else {
        echo "Veuillez entrer un nombre positif ou nul.";
    }
}

// Appel de la fonction avec un exemple (remplacez 10 par le nombre de votre choix)
afficherPuissancesDeDeux(10);
