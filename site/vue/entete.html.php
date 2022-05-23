<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
            @import url("css/menu.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
    <nav>
            
        <ul id="menuGeneral">
            <li><a href="./?action=accueil">Accueil</a></li> 
            <li><a href="./?action=recherche"><img src="images/rechercher.png"  alt="loupe" />Recherche</a></li>
            <li></li> 
            <li id="logo"><a href="./?action=accueil"><img src="images/logoBarre.png"  width= "55%" alt="logo" /></a></li>
            <li><a href="./?action=cgu"></a></li>
            <?php if(isLoggedOn()){ ?>
            <li><a href="./?action=profil"><img src="images/profil.png" alt="loupe" />Mon Profil</a></li>
            <?php } 
            else{ ?>
            <li id="connexion"><a href="./?action=connexion"><img src="images/profil.png" width= "15%" alt="loupe" />Connexion</a></li>
            <?php } ?>
            <li id="inscription"><a href="./?action=connexion">/Inscription</a></li>
        </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="images/logo.png" width= "105%" alt="logo" /></li>
        <?php if (isset($menuBurger)) { ?>
            <?php for ($i = 0; $i < count($menuBurger); $i++) { ?>
                <li>
                    <a href="<?php echo $menuBurger[$i]['url']; ?>">
                        <?php echo $menuBurger[$i]['label']; ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

    <div id="corps">