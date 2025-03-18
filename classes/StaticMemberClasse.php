<?php

class StaticMemeberClasse 
{
    // un type est une classe, les classe que l'on fabrique sont des types -> le noms des types sont les noms des classes
    // se qui permet a un langage d'etre fléxible au niveau des types c'est l'inférence 

    // pour empécher l'instanciation de la classe
    // private function __construct()
    // {
        
    // }
    // // pour empécher le clonage 
    // private function __clone()
    // {
        
    // }
    // cela nous permet de faire en sorte que notre classe se comporte comme une classe static 
    // les méthodes static signifie qu'elles appartiennent a la classe , pour pouvoir les manipuler dans la classe on va devoir utiliser self:: et en dehors de la classe on ne peut pas sans passer par un getteur 
    private static $prop4 = "ma prop static 4";
    // un membre static public est anipulable depuis :
    // -la zone de code de la classe fille avec self:: ou parrent::
    // -depuis le code principal avec [nom de la classe]:: ou
    // -depuis le code principale avec [nom de l'objet]::
    /**
     * function static maStaticMemberMethode
     *
     * @return void
     */ 
    public static function maStaticMemberMethode(): void 
    {
        echo"<br>";
        echo "methode static en action";
    }
    public function getStaticProp(): string
    {
        return self::$prop4;
    }
}