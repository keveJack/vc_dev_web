
<?php

class Personne
{
    private $prenom;
    private $nom;

    public function __construct($prenom, $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        echo "Constructeur de la classe Personne exécuté <br>";
    }

    public function saluer($message = "Bonjour")
    {
        echo "Je m'appelle {$this->prenom} {$this->nom}. $message <br>";
    }

    public function __destruct()
    {
        echo "L'instance de Personne vient d'être détruite <br>";
    }

    public function __debugInfo()
    {
        return ['name' => $this->nom, 'first_name' => $this->prenom];
    }

    public function saluerPersonnalise($mot)
    {
        echo "$mot {$this->prenom} <br>";
    }

    public function __call($name, $arguments)
    {
        echo "La méthode $name a été appelée avec les paramètres suivants : <br>";
        var_dump($arguments);
    }
}
