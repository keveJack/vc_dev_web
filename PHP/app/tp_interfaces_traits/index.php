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

require_once "boite.class.php";
require_once "livre.class.php";
require_once "notifiable.trait.php";

$livre1 = new Livre("Le Petit Prince", 1943, "978-2-0812-7501-6", "Le Petit Prince est un conte philosophique...");
$livre2 = new Livre("Vingt mille lieues sous les mers", 1869, "978-2-253-00001-7", "Vingt mille lieues sous les mers est un roman d'aventures de Jules Verne...");

$boite = new Boite();
$boite->ajouter($livre1);
$boite->ajouter($livre2);

foreach ($boite->getListe() as $element) {
    echo $element->print() . PHP_EOL;
    echo $element->notifier() . PHP_EOL;
}

