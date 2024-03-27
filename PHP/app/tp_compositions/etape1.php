<?php
require_once "catalogue.class.php";
require_once "produit.class.php";
require_once "promotion.class.php";

$catalogue = new Catalogue("Catalogue Redoutamif","le catalogue de la redoutamif, l'ami des ménages");

$produit1 = new Produit("54151DFD", "Canapé Binge: le super canapé pour binger devant la tv",515.50);
$catalogue->addProduit($produit1);

$produit2 = new Produit("ADDE55444", "Meuble Binge: le meuble tv idéal pour binger devant votre série préférée", 256.50);
$catalogue->addProduit($produit2);

$promotionHalloween = new Promotion ("448A", "Une promotion très orange et qui fait peur!",0.25, new DateTime("2023-10-20"), new DateTime("2023-10-23"));

var_dump($produit2);
var_dump($promotionHalloween);
