<?php
require_once('Joueurs.php');
class JoueursEn extends joueurs
{
    private int $majorite = 21;
    public function etreMajeur(): bool
    {
        if($this->age >= $this->majorite){
            return true;
        }
        return false;
    }
    public function devise(): string
    {
        return "$";
    }
}