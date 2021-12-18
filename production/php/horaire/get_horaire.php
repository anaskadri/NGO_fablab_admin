<?php 
    include ("bd_connexion.php");

    $horaire = $bdd->query("SELECT * FROM horaire");
?>