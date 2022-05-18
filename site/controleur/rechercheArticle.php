<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.Article.inc.php";
include_once "$racine/modele/bd.type_de_chaussure.inc.php";
include_once "$racine/modele/bd.photo.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=recherche&critere=nom","label"=>"Recherche par nom");
$menuBurger[] = Array("url"=>"./?action=recherche&critere=type","label"=>"Recherche par type");
// critere de recherche par defaut
$critere = "nom_article";
if (isset($_GET["critere"])) {
    $critere = $_GET["critere"];
}

// recuperation des donnees GET, POST, et SESSION
if (isset($_GET["critere"])){
    $critere = $_GET["critere"];
}
$nom_article="";
if (isset($_POST["nom_article"])){
    $nom_article = $_POST["nom_article"];
}
$tabIdTC = array();
if(isset($_POST["libelle_type"])){
    $$libelle_type = $_POST["libelle_type"];
}


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


switch($critere){
    case 'nom':
        // recherche par nom
        $listeArticle = getRestosByNom($nom_article);
        break;
    case 'type_de_chaussure':
            // recherche par type de sneakers
            $listeArticle = getRestosByType($libelle_type);
            break;
}


// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Recherche d'une Sneakers";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueRechercheArticle.php";
if (!empty($_POST)) {
    // affichage des resultats de la recherche
    include "$racine/vue/vueResultRecherche.php";
}
include "$racine/vue/pied.html.php";


?>