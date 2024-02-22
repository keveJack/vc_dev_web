<?php

class Personne
{
    public $nom;
    public $prenom;
    public $date;
    public $resume;

    public function __construct($prenom, $nom, $date, $resume)
    {
        if (!is_string($prenom) || !is_string($nom) || !($date instanceof DateTime) || !is_string($resume)) {
            throw new TypeError('Les types des arguments du constructeur doivent être corrects.');
        }

        $this->prenom = $prenom;
        $this->nom = strtoupper($nom);
        $this->date = $date;
        $this->resume = $resume;
    }

    public static function create(string $json): Personne
    {
        $data = json_decode($json, true);

        $prenom = $data['prenom'];
        $nom = $data['nom'];
        $date = new DateTime($data['date']);
        $resume = $data['resume'];

        return new self($prenom, $nom, $date, $resume);
    }
}
