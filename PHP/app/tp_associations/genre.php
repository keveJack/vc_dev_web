<?php
class Genre {
    public $nom;
    private $livres;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->livres = new ArrayObject();
    }

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function afficherGenre() {
        // Code pour afficher les détails du genre
    }
}