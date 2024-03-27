<?php
class Catalogue {
    public $titre;
    public $description;
    public $produits;

    public function __construct($titre, $description) {
        $this->titre = $titre;
        $this->description = $description;
        $this->produits = new ArrayObject();
    }

    public function ajouterProduit(Produit $produit) {
        $produit->catalogue = $this;
        $this->produits->append($produit);
    }

    public function supprimerProduit(Produit $produit) {
        $this->produits->removeElement($produit);
        $produit->catalogue = null;
    }
}