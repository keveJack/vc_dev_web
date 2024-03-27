<?php
class Produit {
    public $reference;
    public $description;
    public $prix;
    public $catalogue;
    public $promotions;

    public function __construct($reference, $description, $prix) {
        $this->reference = $reference;
        $this->description = $description;
        $this->prix = $prix;
        $this->promotions = new ArrayObject();
    }

    public function ajouterPromotion(Promotion $promotion) {
        $promotion->ajouterProduit($this);
    }

    public function supprimerPromotion(Promotion $promotion) {
        $promotion->supprimerProduit($this);
    }
}