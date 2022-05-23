<?php
// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=connexion","label"=>" Air Jordan");
$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Basektball");
$menuBurger[] = Array("url"=>"./?action=Questions fréquentes","label"=>"Lifestyle");
$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Running");
$menuBurger[] = Array("url"=>"./?action=Questions fréquentes","label"=>"Fitnss et training");
$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Skateboard");
$menuBurger[] = Array("url"=>"./?action=Questions fréquentes","label"=>"Personnalisation");
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.Article.inc.php";
include_once "$racine/modele/bd.photo.inc.php";

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeArticle = getArticle();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des restaurants répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeArticle.php";
include "$racine/vue/pied.html.php";


?>