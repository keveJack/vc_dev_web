<?php

// Inclure les classes Personnage, Raid et AssociationParticiper
require_once 'personnage.php';
require_once 'raid.php';
require_once 'associationparticiper.php';

// Créer des objets Personnage
$p1 = new Personnage('John', 'Doe', 'Guerrier', 60);
$p2 = new Personnage('Jane', 'Doe', 'Prêtre', 50);
$p3 = new Personnage('Bob', 'Smith', 'Druide', 40);

// Créer des objets Raid
$r1 = new Raid('Donjon de Glabnazgulh', '2023-03-12');
$r2 = new Raid('Forêt de Broceliande', '2023-03-15');

// Associer des Personnages à des Raids
$p1->addRaid($r1);
$p1->addRaid($r2);
$p2->addRaid($r1);
$p3->addRaid($r2);

// Ajouter des rôles aux associations
$a1 = new AssociationParticiper('Tank', $p1, $r1);
$a2 = new AssociationParticiper('Heal', $p2, $r1);
$a3 = new AssociationParticiper('DPS', $p1, $r2);
$a4 = new AssociationParticiper('DPS', $p3, $r2);

// Afficher les associations
echo "Personnage " . $p1->getName() . " " . $p1->getPrenom() . " est associé au Raid " . $r1->getLieu() . " en tant que " . $a1->getRole() . ".\n";
echo "Personnage " . $p2->getName() . " " . $p2->getPrenom() . " est associé au Raid " . $r1->getLieu() . " en tant que " . $a2->getRole() . ".\n";
echo "Personnage " . $p1->getName() . " " . $p1->getPrenom() . " est associé au Raid " . $r2->getLieu() . " en tant que " . $a3->getRole() . ".\n";
echo "Personnage " . $p3->getName() . " " . $p3->getPrenom() . " est associé au Raid " . $r2->getLieu() . " en tant que " . $a4->getRole() . ".\n";