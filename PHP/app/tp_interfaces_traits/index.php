<?php

require_once "livre.class.php";
require_once "boite.class.php";

$livre1 = new Livre("Harry Potter", 2000, "123456789", "A boy wizard ...");
$livre2 = new Livre("Le Seigneur des anneaux", 1960, "987654321", "A long journey ...");

$boite = new Boite();

$boite->add($livre1);
$boite->add($livre2);

for ($i = 0; $i < $boite->count(); $i++) {
    echo $boite->list()[$i]->print() . "\n";
}