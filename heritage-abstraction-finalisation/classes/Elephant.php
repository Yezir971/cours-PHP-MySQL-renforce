<?php

require_once('Animal.php');
class Elephant extends Animal
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
        return "Je mange de l'herbe";
    }
    public function sePresenter(): string 
    {
        return "Bonjour je m'appel ". $this->nom ." je suis un éléphant de couleur " . $this->couleur ." et ma nouriture c'est de l'herbe";  
    }
    
    public function deplacement(): string
    {
        return "je me déplace de facon nonchalante";
    }
}