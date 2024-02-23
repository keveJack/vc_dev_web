<?php
include_once 'functions.php';
include_once 'Personne.php';
$prof = new Personne(prenom: "Thierry", nom: "BRU");
$prof->saluer("Bonyour");
foo($prof);
var_dump($prof);
