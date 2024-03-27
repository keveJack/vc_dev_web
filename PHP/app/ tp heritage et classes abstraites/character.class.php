<?php
class Character
{
    private $name;
    private $pv;
    private $ac;
    private $attaque;
    private $degats;

    public function __construct(string $name, int $pv, int $ac, int $attaque, int $degats)
    {
        $this->name = $name;
        $this->pv = $pv;
        $this->ac = $ac;
        $this->attaque = $attaque;
        $this->degats = $degats;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPV(): int
    {
        return $this->pv;
    }

    public function getAC(): int
    {
        return $this->ac;
    }

    public function getAttaque(): int
    {
        return $this->attaque;
    }

    public function getDegats(): int
    {
        return $this->degats;
    }

    public function subirDegats(int $degats): void
    {
        $this->pv -= $degats;
    }
}