
<h1>Recherche d'une Sneakers</h1>
<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">


    <?php
    switch ($critere) {
        case "nom":
            ?>
            Recherche par nom : <br />
            <input type="text" name="nom_article" placeholder="nom" value="<?= $nom_article?>" /><br />
            <?php
            break;
        case "adresse":
            ?>
            Recherche par type : <br />
            <input type="text" name="libelle_type" placeholder="libelle" value="<?= $vlibelle_type ?>"/><br />
            
            <?php
            break;
    }
    ?>
    <br /><br />
    <input type="submit" value="Rechercher" />

</form>
