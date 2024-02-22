<?php
class stagiaire
{
    public String $prenom;
    public String $nom;
    public function salutation(): string
    {
        return "Je m'appelle $this->prenom $this->nom";
    }
    
}

