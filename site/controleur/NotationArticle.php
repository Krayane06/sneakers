<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.notation.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=connexion","label"=>"Connexion");
$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Inscription");
$menuBurger[] = Array("url"=>"./?action=notation","label"=>"Notation des restos");


$notationR = getNotationRestos();

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    include "$racine/controleur/monProfil.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = "Notations des restaurants";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueNotationResto.php";
    include "$racine/vue/pied.html.php";
}

?>