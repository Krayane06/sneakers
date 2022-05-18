<?php

include_once "bd.inc.php";

function getType_de_chaussure() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Article");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}




function getType_de_chaussureByIdA($idA){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select type_de_chaussure");
        $req->bindValue(':idA', $idA, PDO::PARAM_INT);
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
    
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getType_de_chaussure() : \n";
    print_r(getType_de_chaussure());
    
    
    echo "getType_de_chaussureByIdA(id-Article) : \n";
    print_r(getType_de_chaussureByIdA(4));
}
?>


