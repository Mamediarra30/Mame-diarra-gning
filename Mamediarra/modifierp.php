<?php
if(isset($_POST["modifier"])){
    $id=$_POST["id"];
    $code=$_POST["code"];
    $nom=$_POST["nom"];
    $desc=$_POST["description"];
    $dated=$_POST["date_debut"];
    $datef=$_POST["date_fin"];
    $statut=$_POST["statut"];
    
    
    $sql="UPDATE projet set code='$code', nom='$nom', description='$desc', date_debut='$dated', date_fin='$datef', statut='$statut'
    where id=$id";
    mysqli_query($connexion,$sql); 
}
    
?>
<div class="col-md-8 offset-2 mt-5">
<form action="" method="POST">
    <input type="number" name="id" value="<?php echo $ligne[0]?>" hidden>
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
    <button type="submit" name="modifier" class="btn btn-success">Modifier</button>
    <button type="submit" name="annuler" class="btn btn-danger">Annuler</button>
</form>
</div>