<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.PartagerArticle.inc.php";

// creation du menu burger
$menuBurger[] = Array("url"=>"./?action=PartagerArticle","label"=>"Partager un article");


$Partagerunetable = getPartagerunetable();

    $titre = "Partager un article";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vuePartagerArticle.php";
    include "$racine/vue/pied.html.php";
