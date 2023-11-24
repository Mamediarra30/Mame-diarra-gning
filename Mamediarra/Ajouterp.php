<?php
  if(isset($_POST["ajouter"])){
    $code=$_POST["code"];
    $nom=$_POST["nom"];
    $desc=$_POST["description"];
    $dated=$_POST["date_debut"];
    $datef=$_POST["date_fin"];
    $statut=$_GET["statut"];
    
    
    $sql="INSERT INTO projet values(NULL,'$code','$nom','$desc','$dated','$datef','$statut',)";
    mysqli_query($connexion,$sql);
  }
?>
<div class="col-md-8 offset-2 mt-5">
<form action="" method="POST">
    <label for="">code</label>
    <input type="number" name="code" class="form-control">
    <br>
    <label for="">nom</label>
    <input type="text" name="nom" class="form-control">
    <br>
    <label for="">description</label>
    <input type="text" name="description" class="form-control">
    <br>
    <label for="">date_debut</label>
    <input type="date" name="date_debut" class="form-control">
    <br>
    <label for="">date_fin</label>
    <input type="date" name="date_fin" class="form-control">
    <br>
    <label for="">statut</label>
    <input type="text" name="description" class="form-control">
    <br>
    <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
    <button type="submit" name="annuler" class="btn btn-danger">Annuler</button>
</form>
</div>