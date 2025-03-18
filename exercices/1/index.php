<?php
include('../../function/functions.php');
require_once('../1/classes/Employe.php');
// Créer une classe Employe contenant les propriétés et les méthodes
// suivantes :
// - une propriété privée : $age
// - une propriété publique : $nom
// - une propriété publique : $prenom
// - une propriété publique: $poste
// - une méthode privée : seDeplacer(): void
// - une méthode publique : rendezVous(string $nomClient): void
// Créer un objet nommé $bob de classe Employe.
// Affichez le contenu de l’objet $bob avec la fonction show() 

$bob = new Employe(15, "ahmedaly","james", "Ceci est mon post");
// $bob->nom = "bob";
show($bob);

$bob->setAge(34);
show($bob);
$bob->activeSeDeplacer();