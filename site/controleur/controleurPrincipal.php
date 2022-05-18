<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeArticle.php";
    $lesActions["liste"] = "listeArticle.php";
    $lesActions["detail"] = "detailArticle.php";
    $lesActions["recherche"] = "rechercheArticle.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["notation"] = "NotationArticle.php";
    $lesActions["partager"] = "PartagerArticle.php";
    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
