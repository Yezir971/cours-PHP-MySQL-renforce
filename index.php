<?php 
include('../j-2/function/functions.php');

// pour appeler une classe une fois, si on l'apelle une autre foois elle ne sera pas appeler a nouveau  
require_once('../j-2/classes/EtudeClasse.php');
// ll'encapsulation est le fait de cacher le fonctionnement interne 
// require_once('./heritage-abstraction-finalisation/classes/Joueurs.php');
require_once('./heritage-abstraction-finalisation/classes/JoueursFR.php');
require_once('./heritage-abstraction-finalisation/classes/JoueursEN.php');


$etude = new EtudeClasse;
show($etude);

// $joueur = new joueurs(15);
$fred = new JoueursEn(17);
show($fred, "fred");
$dan = new JoueursEn(25);
show($dan, "dan");
if($fred->seConnecter()){
    echo 'joueur francais connecter';
    echo printf("devise utilisé : %s ", $fred->devise());
    echo '<br>';

}

if($fred->seConnecter()){
    echo 'joueur francais connecter';
}else{
    echo 'Impossible de se connecter car le joueurs est mineur';
}

if($dan->seConnecter()){
    echo 'joueur américain connecter';
    echo printf("devise utilisé : %s ", $dan->devise());
    echo '<br>';

}

if($dan->seConnecter()){
    echo 'joueur américain connecter';
}else{
    echo 'Impossible de se connecter car le joueurs est mineur';
}

// les classe et les méthodes peuvent etre final cela signifie que l'on ne peut plus extend cette classe 
// en php tout les fonctions sont pas passé par référence mais par défaut ou par valeur c'est a dire que si j'ai un tableau je le passe dans une fonction qui modifie le tableau 
// de la facon clasique c'est un passage par défaut on change une copie du tableu mais ssi on ajoute un & -> function moifie (array & t) cela va changer le tableau en lui meme et donc changer la valeur par référence 
// si on touche a un objet en php on le touche en mémoire donc on va directement le modifier et pas modifier la copie de la valeur par défaut, pouravoir le comportement on utilise la méthode magique __copy