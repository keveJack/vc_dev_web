<?php
require_once 'auteur.php';
require_once 'pays.php';
require_once 'genre.php';
require_once 'livre.php';

$pays = new Pays('France');

$genre = new Genre('Roman');

$auteur1 = new Auteur('Dumas', 'Alexandre', $pays);
$auteur2 = new Auteur('Verne', 'Jules', $pays);

$livre1 = new Livre('Les Trois Mousquetaires');
$livre1->ajouterAuteur($auteur1);
$livre1->setGenre($genre);

$livre2 = new Livre('Vingt Mille Lieues sous les mers');
$livre2->ajouterAuteur($auteur2);
$livre2->setGenre($genre);

