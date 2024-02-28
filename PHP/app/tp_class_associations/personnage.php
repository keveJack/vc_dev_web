<?php
class Personnage {
    private $name;
    private $prenom;
    private $classe;
    private $niveau;
    private $raids;

    public function __construct($name, $prenom, $classe, $niveau) {
        $this->name = $name;
        $this->prenom = $prenom;
        $this->classe = $classe;
        $this->niveau = $niveau;
        $this->raids = array();
    }

    public function getName() {
        return $this->name;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function getNiveau() {
        return $this->niveau;
    }

    public function addRaid(Raid $raid) {
        $this->raids[] = $raid;
    }

    public function getRaids() {
        return $this->raids;
    }
}