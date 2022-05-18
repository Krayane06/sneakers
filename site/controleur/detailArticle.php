<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.Article.inc.php";
include_once "$racine/modele/bd.type_de_chaussure.inc.php";
include_once "$racine/modele/bd.photo.inc.php";
include_once "$racine/modele/bd.critiquer.inc.php";
include_once "$racine/modele/bd.aimer.inc.php";
include_once "$racine/modele/authentification.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"#top","label"=>"Le restaurant");
$menuBurger[] = Array("url"=>"#adresse","label"=>"Adresse");
$menuBurger[] = Array("url"=>"#photos","label"=>"Photos");
$menuBurger[] = Array("url"=>"#horaires","label"=>"Horaires");
$menuBurger[] = Array("url"=>"#crit","label"=>"Critiques");

// recuperation des donnees GET, POST, et SESSION
$listeArticle = $_GET["id_article"];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$unResto = getRestoByIdA($listeArticle);

$lesTypesCuisine = getTypesCuisineByIdR($listeArticle);
$lesPhotos = getPhotosById_article($listeArticle);
$noteMoy = round(getNoteMoyenneByIdR($listeArticle), 0);
$mailU = getMailULoggedOn();
$aimer = getAimerById($Mail, $listeArticle);
$critiques = getCritiquerByIdR($listeArticle);


// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "detail d'une Sneakers";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailArticle.php";
include "$racine/vue/pied.html.php";
?>