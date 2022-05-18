<?php

include_once "bd.inc.php";

function getUtilisateurs() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from client");
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

function getUtilisateurByMail($Mail) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from client where Mail=:Mail");
        $req->bindValue(':Mail', $Mail, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($mail, $mdp, $pseudoU) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($mdp, "sel");
        $req = $cnx->prepare("insert into utilisateur (Mail, mdpU, pseudoU) values(:Mail,:mdpU,:pseudoU)");
        $req->bindValue(':Mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':pseudoU', $pseudoU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getUtilisateurs() : \n";
    print_r(getUtilisateurs());

    echo "getUtilisateurByMail(\"mathieu.capliez@gmail.com\") : \n";
    print_r(getUtilisateurByMail("mathieu.capliez@gmail.com"));

    echo "addUtilisateur('mathieu.capliez3@gmail.com', 'azerty', 'mat') : \n";
    addUtilisateur("mathieu.capliez3@gmail.com", "azerty", "mat");
}
?>