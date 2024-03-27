<?php
require_once "catalogue.class.php";
require_once "produit.class.php";
require_once "promotion.class.php";

// Créer le catalogue
$catalogue = new Catalogue("Catalogue Redoutamif", "le catalogue de la redoutamif, l'ami des ménages");

// Créer les produits
$produit1 = new Produit("54151DFD", "Canapé Binge: le super canapé pour binger devant la tv", 515.50);
$produit2 = new Produit("ADDE55444", "Meuble Binge: le meuble tv idéal pour binger devant votre série préférée", 256.50);

// Ajouter les produits au catalogue
$catalogue->ajouterProduit($produit1);
$catalogue->ajouterProduit($produit2);

// Créer la promotion
$promotionHalloween = new Promotion("448A", "Une promotion très orange et qui fait peur!", 0.25, new DateTime("2023-10-20"), new DateTime("2023-11-20"));

// Ajouter la promotion aux produits
$produit1->ajouterPromotion($promotionHalloween);
$produit2->ajouterPromotion($promotionHalloween);