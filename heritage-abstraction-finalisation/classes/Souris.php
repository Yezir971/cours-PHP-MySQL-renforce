<?php

class Souris extends Animal
{
    private string $habitatNaturel = "";
    public function __construct(string $habitatNaturel , string $nom, string $couleur) {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->habitatNaturel = $habitatNaturel;
        parent::$nbAnimuxCrer ++;
    }
    public function manger(): string 
    {
        return "Je mange du fromage !";
    }
    public function sePresenter(): string 
    {
        return "Bonjour je m'appel ". $this->nom ." je suis une souris de couleur " . $this->couleur ." et ma nouriture c'est du fromage";  
    }
}