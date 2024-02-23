<?php

namespace aventures;

class Personnage
{
   private string $_prenom;
   private int $_forceAttaque;
   private int $_pointsDeVie;

   public function __construct(string $prenom = "", int $forceAttaque = 0, int $pointsDeVie = 0)
   {
        $this->_prenom = $prenom;
        $this->_forceAttaque = $forceAttaque;
        $this->_pointsDeVie = $pointsDeVie;
   }
    
   public function getPrenom(): string
   {
        return $this->_prenom;
   }

   public function getForceAttaque(): int
   {
        return $this->_forceAttaque;
   }

   public function getPointsDeVie(): int
   {
        return $this->_pointsDeVie;
   }

   public function setPrenom(string $prenom): void
   {
        // Utilisation de htmlspecialchars pour échapper les balises HTML
        $this->_prenom = htmlspecialchars($prenom);
   }

   public function setForceAttaque(int $forceAttaque): void
   {
        // Assurer que la force d'attaque est au moins 0
        if ($forceAttaque < 0) {
            $this->_forceAttaque = 0;
        } else {
            $this->_forceAttaque = $forceAttaque;
        }
   }

   public function setPointsDeVie(int $pointsDeVie): void
   {
        // Vérification si la valeur est négative
        if ($this->estNegatif($pointsDeVie)) {
            // Mettre à -1 si la valeur est négative
            $this->_pointsDeVie = -1;
        } else {
            $this->_pointsDeVie = $pointsDeVie;
        }
   }

   private function estNegatif(int $nombre): bool
   {
        return $nombre < 0;
   }
}
