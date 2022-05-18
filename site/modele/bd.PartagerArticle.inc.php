<?php

include_once "bd.inc.php";

function getPartagerunetable()
{
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT nom_article,Taille,Prix FROM Article ");
        $req->execute();
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
} 
