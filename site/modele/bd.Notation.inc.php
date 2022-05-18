<?php

include_once "bd.inc.php";

function getNotationRestos() {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT nomR,villeR,COUNT(*),AVG(note) FROM resto as r,critiquer as c where c.idR = r.idR GROUP BY r.idR");
        $req->execute();
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}