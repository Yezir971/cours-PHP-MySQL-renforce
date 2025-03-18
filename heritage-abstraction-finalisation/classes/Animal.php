<?php

class Animal
{
    // override et overload, une surcharge est lorsque dans la mm classe on a le on a 2 définition de méthodes une avec paramètre et une autre sans paramètre = overload, en php on fait de l'overload on défini une méthode défini dans la mère dans la fille 
    public function __construct(string $habitatNaturel )
    {
        $this->habitatNaturel = $habitatNaturel;
    }
    protected string $couleur = "rouge";
    public static int $nbAnimuxCrer = 0;
    protected string $nom;
    private string $habitatNaturel;

    public function deplacement(): string
    {
        return "je me déplace";
    }


}