<?php
class Promotion {
    public $reference;
    public $description;
    public $tauxReduction;
    public $dateDebut;
    public $dateFin;
    public $produits;

    public function __construct($reference, $description, $tauxReduction, $dateDebut, $dateFin) {
        $this->reference = $reference;
        $this->description = $description;
        $this->tauxReduction = $tauxReduction;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->produits = new ArrayObject();
    }

    public function ajouterProduit(Produit $produit) {
        $this->produits->append($produit);
        $produit->ajouterPromotion($this);
    }

    public function supprimerProduit(Produit $produit) {
        $this->produits->removeElement($produit);
        $produit->supprimerPromotion($this);
    }
}