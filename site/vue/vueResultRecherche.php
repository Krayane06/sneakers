
<h1>Liste des sneakers</h1>

<?php
for ($i = 0; $i < count($listeRestos); $i++) {
    ?>


    <?php
    $lesTypesCuisine = getType_de_chaussureByIdA($listeArticle[$i]['idA']);
    $lesPhotos = getPhotosById_article($listeArticle[$i]['idA']);
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($lesPhotos) > 0) { ?>
                <img src="photos/<?= $lesPhotos[0]["cheminP"] ?>" alt="photo du restaurant" />
            <?php } ?>

        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&idA=" . $listeArticle[$i]['idA'] . "'>" . $listearticle[$i]['id_Article'] . "</a>"; ?>
            <br />
            <?= $listeRestos[$i]["numAdrR"] ?>
            <?= $listeRestos[$i]["voieAdrR"] ?>
            <br />
            <?= $listeRestos[$i]["cpR"] ?>
            <?= $listeRestos[$i]["villeR"] ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">		
                <?php for ($j = 0; $j < count($lesTypesdechaussures); $j++) { ?>
                    <li class="tag"><span class="tag">#</span><?= $lesTypesdechaussures[$j]["libelle_type"] ?></li>
                    <?php } ?>
            </ul>


        </div>

    </div>





    <?php
}
?>


