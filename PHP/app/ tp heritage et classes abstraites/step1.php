<?php
include_once 'character.class.php';
include_once 'duel.class.php';
$albert = new Character(name: 'Albert', pv: 10, ac: 8, attaque: 10, degats: 5);
$guraktak = new Character(name: ' Guraktak', pv: 15, ac: 2, attaque: 10, degats: 6);
$vainqueur = Duel::jouerDuel($albert, $guraktak);
if ($vainqueur) {
    echo "le gagnant est " . $vainqueur->getName();
} else {
    echo "match nul!";
}
