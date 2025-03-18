<?php

abstract class joueurs
{
    protected int $age ;
    public function __construct(int $age) {
        $this->age = $age;
    }
    public function seConnecter(): bool
    {
        return $this->etreMajeur();
    }
    // Les méthodes abstract sont des signatures 
    abstract public function etreMajeur(): bool; 
    abstract public function devise(): string;
}