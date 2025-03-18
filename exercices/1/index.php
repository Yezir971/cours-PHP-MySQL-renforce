<?php
include('../../function/functions.php');
require_once('../1/classes/Employe.php');
require_once('../../classes/ConstanteClass.php');
require_once('../../classes/StaticMemberClasse.php');
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

echo "<br>";
echo "----------------------";
$objConst = new ConstanteClass;
$objConst->showConstante();
echo "<br>";
$objConst->getConstPrivate();
echo "<br>";
$objConst->getConstProtected();
echo "<br>";

echo 'appel de la constant de la classe public sur la classe';
echo "<br>";
echo ConstanteClass::MA_CONSTANT_PUBLIC;
echo "<br>";
echo 'appel de la constant de la classe public sur l objet';
echo "<br>";
echo $objConst::MA_CONSTANT_PUBLIC;
echo "<br>";
echo "<br>";
echo "----------------------";
echo "<br>";
$objMyStaticMemberClass = new StaticMemeberClasse;
echo "<br>";
StaticMemeberClasse::maStaticMemberMethode();
