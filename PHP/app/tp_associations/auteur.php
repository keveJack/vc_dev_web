<?php
class Auteur {
    public $nom;
    public $prenom;
    private $origine;

    public function __construct($nom, $prenom, Pays $origine) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->origine = $origine;
    }

    public function afficherAuteur() {
        // Code pour afficher les détails de l'auteur
    }

    public function getOrigine() {
        return $this->origine;
    }

    public function setOrigine(Pays $pays) {
        $this->origine = $pays;
    }
}