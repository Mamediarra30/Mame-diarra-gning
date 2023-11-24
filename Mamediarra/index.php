<?php
    require_once("Bd.php");
    require_once ("header.php");
    require_once("navbar.php");
    if(isset($_GET["page"])){
        if($_GET["page"]=="ajouter"){
            require_once("Ajouterp.php");
        }
        if($_GET["page"]== "modifier"){
            $id=$_GET["id"];
            $sql="SELECT * FROM projet WHERE id=$id";
            $result=mysqli_query($connexion,$sql);
            $projet=mysqli_fetch_row($result);
            var_dump($projet);
            require_once("modifierp.php");
        }
        if($_GET["page"]=="supprimer"){
            $id=$_GET["id"];
            echo $id;
            $sql= "DELETE FROM projet WHERE id=$id";
            mysqli_query($connexion,$sql);
            header('location:index.php');
        }
    }else{
        require_once("listeprojet.php");
    }
    require_once("footer.php");



?>