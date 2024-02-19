<?php
// Définition du tableau $individu
$individu1 = array(
    'Nom'=>'Dupond',
    'Prenom'=>'Martin',
    'Age'=>18,
    'Nationalité'=>'Français',
);

$individu2 = array(
    'Nom'=>'Durand',
    'Prenom'=>'Jean',
    'Age'=>25,
    'Nationalité'=>'Français',
);

$individu3 = array(
    'Nom'=>'Smith',
    'Prenom'=>'John',
    'Age'=>30,
    'Nationalité'=>'Américain',
);

// Déclaration du tableau $individus contenant les autres tableaux $individu
$individus = array($individu1, $individu2, $individu3);

// Affichage du tableau $individus
foreach ($individus as $key => $individu) {
    echo "Individu $key : <br>";
    foreach ($individu as $cle => $valeur) {
        echo "$cle : $valeur <br>";
    }
    echo "<br>";
}
?>
