<?php

class Voiture {
    public string $marque;
    public string $modele;
    public int $annee;
    public string $couleur;

    public function __construct(string $marque, string $modele, int $annee, string $couleur) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
    }

    public function afficherDetails(): string {
        return "Voiture : $this->marque $this->modele, Année : $this->annee, Couleur : $this->couleur";
    }
}

class Garage {
    private array $voitures;

    public function __construct() {
        $this->voitures = [];
    }

    public function ajouterVoiture(Voiture $voiture): void {
        $this->voitures[] = $voiture;
    }

    public function afficherToutesLesVoitures(): void {
        foreach ($this->voitures as $voiture) {
            echo $voiture->afficherDetails() . "<br>";
        }
    }

    public function retirerVoiture(Voiture $voiture): void {
        $index = array_search($voiture, $this->voitures);
        if ($index !== false) {
            unset($this->voitures[$index]);
        }
    }
}

// Exemple d'utilisation
$garage = new Garage();

$voiture1 = new Voiture("Toyota", "Corolla", 2020, "Noir");
$voiture2 = new Voiture("Honda", "Civic", 2018, "Blanc");

$garage->ajouterVoiture($voiture1);
$garage->ajouterVoiture($voiture2);

$garage->afficherToutesLesVoitures();
echo "<br>";

$garage->retirerVoiture($voiture1);

$garage->afficherToutesLesVoitures();

?>
