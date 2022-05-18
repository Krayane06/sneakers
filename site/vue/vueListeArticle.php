
<h1>Liste des Sneakers</h1>


<?php
for ($i = 0; $i < count($listeArticle); $i++) {

    $lesPhotos = getPhotosById_article($listeArticle[$i]['id_article']);
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($lesPhotos) > 0) { ?>
                <img src="photos/<?= $lesPhotos[0]["libelle_photo"] ?>" alt="photo des sneakers" />
            <?php } ?>


        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&id_article=" . $listeArticle[$i]['id_article'] . "'>" . $listeArticle[$i]['nom_article'] . "</a>"; ?>
        <center>
            <br />
            <?= $listeArticle[$i]["Marque"] ?>
            <br />
            <br />
            <?= $listeArticle[$i]["Prix"] ?>
            </center>
        </div>
        <div class="tagCard">
            <ul id="tagFood">		


            </ul>


        </div>

    </div>





    <?php
}
?>


