<?php

// - une méthode privée : seDeplacer(): void
// - une méthode publique : rendezVous(string $nomClient): void
// Créer un objet nommé $bob de classe Employe.
/**
 * anotation for class Employe
 */
class Employe
{
    /**
     * Old variable
     *
     * @var integer
     */
    private int $age;
    /**
     * Name variable
     *
     * @var string
     */
    public string $nom;
    /**
     * Laste name variable
     *
     * @var string
     */
    public string $prenom;
    /**
     * Poste variable
     *
     * @var string
     */
    public string $post;
    /**
     * Constructeur for Employe class
     *
     * @param integer $age
     * @param string $prenom
     * @param string $nom
     * @param string $post
     */
    public function __construct(int $age, string $prenom, string $nom, string $post)
    {
        // this nous sert a faire référence au composant englobant 
        if(!empty($prenom) && is_string($prenom)){
            $this->prenom = $prenom;
        }else{
            if(!is_string($prenom)){
                throw new Exception("Error le prénom doit etre une chaine de caractères", 1);
            }
            // InvalidArgumentException nous ser a faire une exception plus précise 
            throw new InvalidArgumentException("Error prénom non valide", 1);
        }


        if(!empty($nom) && is_string($nom)){
            $this->nom = $nom;
        }else{
            if(!is_string($nom)){
                throw new Exception("Error le nom doit etre une chaine de caractères", 1);
            }
            // InvalidArgumentException nous ser a faire une exception plus précise 
            throw new InvalidArgumentException("Error nom non valide", 1);
        }
        if(!empty($post) && is_string($post)){
            $this->post = $post;
        }else{
            if(!is_string($post)){
                throw new Exception("Error le post doit etre une chaine de caractères", 1);
            }
            // InvalidArgumentException nous ser a faire une exception plus précise 
            throw new InvalidArgumentException("Error post non valide", 1);
        }
        if(!empty($age) && is_int($age)){
            $this->age = $age;
        }else{
            if(!is_int($age)){
                throw new Exception("Error l'age doit etre un int", 1);
            }
            // InvalidArgumentException nous ser a faire une exception plus précise 
            throw new InvalidArgumentException("Error age non valide", 1);
        }
    } 
    /**
     * seDeplacer function
     *
     * @return void
     */
    private function seDeplacer(): void 
    {
        echo 'Je me déplace.';
        
    } 
    /**
     * rendezVous function
     *
     * @param string $nomClient
     * @return void
     */
    public function rendezVous(string $nomClient): void
    {   
        echo 'Je me prend rdv !';
    }

    /**
     * getteur for get the age of the employe
     *
     * @return integer
     */
    public function getEmployeAge():int
    {
        return $this->age;
    }
    /**
     * setteur for get the age of the employe
     *
     * @param string $age
     * @return void
     */
    public function setAge(int $age)
    {
        if(!empty($age) && is_int($age)){
            $this->age = $age;
        }else{
            if(!is_int($age)){
                throw new Exception("Error l'age doit etre un int");
            }
            // InvalidArgumentException nous ser a faire une exception plus précise 
            throw new InvalidArgumentException("Error age non valide");
        }
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function activeSeDeplacer()
    {
        $this->seDeplacer();
    }


}