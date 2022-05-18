<h1>Notation des restaurants</h1>
<table style="width:100%">
  <tr>
    <th>Restaurant</th>
    <th>Ville</th>
    <th>Nombre de critiques</th>
    <th>Note moyenne</th>
  </tr>
  <?php foreach($notationR as $n) { ?>
  <tr>
    <td><?= $n["nomR"] ?></td>
    <td><?= $n["villeR"] ?></td>
    <td><?= $n["COUNT(*)"] ?></td>
    <td><?= $n["AVG(note)"] ?></td>
  </tr>
  <?php } ?>
</table>