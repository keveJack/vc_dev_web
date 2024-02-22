<?php

class Rectangle {
    public float $longueur;
    public float $largeur;

    public function __construct(float $longueur, float $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerPerimetre(): float {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function calculerSurface(): float {
        return $this->longueur * $this->largeur;
    }

    public function estUnLosange(): bool {
        return $this->longueur === $this->largeur;
    }
}

?>
