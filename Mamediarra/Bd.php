<?php
$_serveur="localhost";
$user="root";
$pwd="";
$bdname="diarra";
//tru or false
$connexion=mysqli_connect($_serveur,$user,$pwd,$bdname);

if(!$connexion){
    echo"Erreur de connexion";
}else{
    echo"connexion avec succes";
}
?>