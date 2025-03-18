<?php 
include('../j-2/function/functions.php');

// pour appeler une classe une fois, si on l'apelle une autre foois elle ne sera pas appeler a nouveau  
require_once('../j-2/classes/EtudeClasse.php');
// ll'encapsulation est le fait de cacher le fonctionnement interne 


$etude = new EtudeClasse;
show($etude);