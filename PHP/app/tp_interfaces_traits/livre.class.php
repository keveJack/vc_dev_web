<?php

class Livre implements Printable {
    private $titre;
    private $_dateSortie;
    private $isbn;
    private $resume;

    public function __construct(string $titre, int $dateSortie, string $isbn, string $resume) {
        $this->titre = $titre;
        $_dateSortie = $dateSortie;
        $this->isbn = $isbn;
        $this->resume = $resume;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function getDateSortie(): int {
        return $_dateSortie;
    }
}