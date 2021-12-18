<?php 
    include ("bd_connexion.php");

    $formation = $bdd->query("SELECT * FROM formation");
?>