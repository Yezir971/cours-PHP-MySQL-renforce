<?php
require_once('Forme.php');
class Cercle extends Forme
{
    // une classe abstraite peut etre étendu mais on ne peut pas créer de classe abstraite 
    private float $rayon;
    private string $unite;

    public function __construct(float $rayon, string $unite) 
    {
        if(!is_float($rayon)) {
            throw new InvalidArgumentException("Le rayon doit être un chiffre decimal");
        }
        $this->rayon = $rayon;
        if(!is_string($unite)) {
            throw new InvalidArgumentException("L'unité doitre une chaine");
        }
        $this->unite = $unite;
        
    }
    public function aire(): void
    {
        $aire = 3.14 * $this->rayon * $this->rayon;
        
        echo "L'aire du cercle est de : $aire $this->unite ²";
    }
}