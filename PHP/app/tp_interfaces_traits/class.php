<?php

interface Ovipare {
    public function pondre(): string;
}

interface Mammifere {
    public function allaiter(): string;
}

interface Herbivore {
    public function brouter(): string;
}

interface Predateur {
    public function chasser(): string;
}

abstract class Animal {
    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}

class Poule extends Animal implements Ovipare {
    public function pondre(): string {
        return "La poule $this->name pond un oeuf.";
    }

    public function brouter(): string {
        return "La poule $this->name broute de l'herbe.";
    }
}

class Chat extends Animal implements Mammifere, Predateur {
    public function allaiter(): string {
        return "Le chat $this->name allaite ses petits.";
    }

    public function chasser(): string {
        return "Le chat $this->name chasse une souris.";
    }
}

class Chien extends Animal implements Mammifere {
    public function allaiter(): string {
        return "Le chien $this->name allaite sa portée.";
    }

    public function chasser(): string {
        return "Le chien $this->name chasse un chat.";
    }
}

class Vache extends Animal implements Herbivore {
    public function brouter(): string {
        return "La vache $this->name broute de l'herbe.";
    }
}

$poules = [
    new Poule('Nestor'),
    new Poule('Bernadette'),
];

$chats = [
    new Chat('Félix'),
    new Chat('Whiskers'),
];

$chien = new Chien('Rex');
$vache = new Vache('Belle');

$herbivores = [&$vache, &$poules[0], &$poules[1]];

$carnivores = [&$chien, &$chats[0], &$chats[1]];

echo "Herbivores:\n";
foreach ($herbivores as $herbivore) {
    echo $herbivore->brouter() . "\n";
}

echo "\nCarnivores:\n";
foreach ($carnivores as $carnivore) {
    echo $carnivore->chasser() . "\n";
}