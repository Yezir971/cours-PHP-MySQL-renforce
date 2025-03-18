<?php
require_once('Joueurs.php');

class JoueursFr extends joueurs
{


    private int $majorite = 18;
    public function etreMajeur(): bool
    {
        if($this->age >= $this->majorite){
            return true;
        }
        return false;
    } 
    public function devise(): string
    {
        return "€";
    }
}