<?php
class Livre {
    public $titre;
    private $auteurs;
    private $genre;

    public function __construct($titre) {
        $this->titre = $titre;
        $this->auteurs = new ArrayObject();
    }

    public function ajouterAuteur(Auteur $auteur) {
        $this->auteurs[] = $auteur;
    }

    public function afficherLivre() {
        // Code pour afficher les détails du livre
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre(Genre $genre) {
        $this->genre = $genre;
    }
}