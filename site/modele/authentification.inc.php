<?php

include_once "bd.utilisateur.inc.php";

function login($mail, $mdp) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByMail($mail);
    $mdpBD = $util["mdp"];

    if (trim($mdpBD) == trim(crypt($mdp, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["Mail"] = $mail;
        $_SESSION["mdp"] = $mdpBD;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["Mail"]);
    unset($_SESSION["mdp"]);
}

function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["Mail"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["Mail"])) {
        $util = getUtilisateurByMail($_SESSION["Mail"]);
        if ($util["Mail"] == $_SESSION["Mail"] && $util["mdp"] == $_SESSION["mdp"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');


    // test de connexion
    login("test@bts.sio", "sio");
    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();
}
?>