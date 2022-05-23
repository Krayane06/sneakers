
<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["mail"] ?> <br />
Mon pseudo : <?= $util["pseudoU"] ?> <br />

<hr>

les Articles que j'aime : <br />
<?php for($i=0;$i<count($mesRestosAimes);$i++){ ?>
    <a href="./?action=detail&idR=<?= $mesArticlesAimes[$i]["idR"] ?>"><?= $mesArticlesAimes[$i]["nomR"] ?></a><br />
<?php } ?>
<hr>
les types d'Articles que j'aime : 
<ul id="tagFood">		
<?php for($i=0;$i<count($mesTypeArticlesAimes);$i++){ ?>
    <li class="tag"><span class="tag">#</span><?= $mesTypeArticlesAimes[$i]["libelleTC"] ?></li>
<?php } ?>
</ul>
<hr>
<a href="./?action=deconnexion">se deconnecter</a>


