<?php
class AssociationParticiper {
    private $role;
    private $personnage;
    private $raid;

    public function __construct($role, Personnage $personnage, Raid $raid) {
        $this->role = $role;
        $this->personnage = $personnage;
        $this->raid = $raid;
    }

    public function getRole() {
        return $this->role;
    }

    public function getPersonnage() {
        return $this->personnage;
    }

    public function getRaid() {
        return $this->raid;
    }
}