<?php

use Dom\Element;

require('../function/functions.php');
require_once('./classes/Elephant.php');
require_once('./classes/Souris.php');

$dumbo = new Elephant('Savanne', 'Dumbo','gris' );
// echo $dumbo->deplacement();
echo "<br>";
echo $dumbo->manger();
echo "<br>";
echo $dumbo->sePresenter();
echo "<br>";
$souris = new Souris('trou de souris', 'Jerry','marron' );
// echo $dumbo->deplacement();
echo $souris->manger();
echo "<br>";
echo $souris->sePresenter();
echo "<br>";
show($dumbo, 'dumbo');
echo "<br>";
show($souris, 'jerry');
echo "<br>";
echo "<br>";
echo "nombre d'animaux crée : " . Animal::$nbAnimuxCrer; 
echo "<br>";
echo $dumbo->deplacement();
