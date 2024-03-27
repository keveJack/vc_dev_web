<?php

class Boite
{
    private $list;

    public function __construct()
    {
        $this->list = new ArrayObject();
    }

    public function add(Printable $element)
    {
        $this->list->append($element);
    }

    public function count(): int
    {
        return count($this->list);
    }

    public function list(): ArrayObject
    {
        return $this->list;
    }
}