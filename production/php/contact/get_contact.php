<?php 
    include ("bd_connexion.php");

    $contact = $bdd->query("SELECT * FROM contact");
?>