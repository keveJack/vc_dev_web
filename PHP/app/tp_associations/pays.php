<?php
class Pays {
    public $nom;
    private $auteurs;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->auteurs = new ArrayObject();
    }

    public function ajouterAuteur(Auteur $auteur) {
        $this->auteurs[] = $auteur;
    }

    public function afficherPays() {
        // Code pour afficher les détails du pays
    }
}