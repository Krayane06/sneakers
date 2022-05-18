<h1>Partager une table</h1>
<form method="post">
    <label for="ville">Dans quelle ville :</label><br>
    <input type="text' id="ville" name="villeR">
    <br><input type="submit" name="partager" value="Rechercher"></br>
</form>


<?php foreach($Partagerunetable as $n) { ?>

<h1>Liste des restaurants</h1>
<table style="width:100%">
    <tr>
        <th>Restaurant</th>
        <th>Ville</th>
        <th>Qui aime ce resto</th>
</tr>
<?php } ?>
</table>
