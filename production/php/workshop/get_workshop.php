<?php 
    include ("bd_connexion.php");

    $workshop = $bdd->query("SELECT * FROM workshops");
?>