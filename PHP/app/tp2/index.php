<?php
declare(strict_types=1);
include_once('stagiaire.class.php');

// Création des instances de stagiaire
$stagiaire1 = new stagiaire();
$stagiaire1->nom = "DUPONT";
$stagiaire1->prenom = "Martin";

$stagiaire2 = new stagiaire();
$stagiaire2->nom = "POPPINS";
$stagiaire2->prenom = "Marie";

// Création d'un tableau contenant les deux stagiaires
$tableauStagiaires = array($stagiaire1, $stagiaire2);

// Appel de la méthode salutation() pour chaque stagiaire
foreach ($tableauStagiaires as $stagiaire) {
    echo $stagiaire->salutation() . "<br>";
}

