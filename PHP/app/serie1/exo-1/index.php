<?php
// Vérifie si le paramètre 'nombre' est passé dans l'URL
if (isset($_GET['nombre'])) {
    // Récupération de la valeur du paramètre 'nombre'
    $nombre = $_GET['nombre'];

    // Affichage avec echo
    echo "Valeur de 'nombre' avec echo : $nombre <br>";

    // Affichage avec var_dump
    echo "Valeur de 'nombre' avec var_dump : ";
    var_dump($nombre);
} else {
    echo "Le paramètre 'nombre' n'a pas été spécifié dans l'URL.";
}
