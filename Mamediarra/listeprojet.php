<?php
     $sql="SELECT * from projet";
     $listeprojet= mysqli_query($connexion,$sql);
?>

<!--listes projet-->
 <div class="col-md-8 offset-2">
<br>
<a type="button" class="btn btn-primary float-end" href="?page=ajouter">Ajouter</a>
<br>
<br>
<table class="table btn btn-dark" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CODE</th>
      <th scope="col">NOM</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">BUDGET</th>
      <th scope="col">DATE_DEBUT</th>
      <th scope="col">DATE_FIN</th>
      <th scope="col">STATUT</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php while ( $ligne= mysqli_fetch_row($listeprojet)) {?>
    <tr>
      <th scope="row"><?php echo $ligne[0]?></th>
      <td><?php echo $ligne[1]?></td>
      <td><?php echo $ligne[2]?></td>
      <td><?php echo $ligne[3]?></td>
      <td><?php echo $ligne[4]?></td>
      <td><?php echo $ligne[5]?></td>
      <td><?php echo $ligne[6]?></td>
      <td><?php echo $ligne[7]?></td>
      <td>
      <a type="button" class="btn btn-primary" href="?page=modifier&&id=<?php echo $ligne[0]?>">Modifier</a>
      <a type="button" class="btn btn-danger" href="?page=delete&&id=<?php echo $ligne[0]?>">Supprimer</a></td>
    </tr>
    <?php  }?>
  </tbody>
</table>
</div>