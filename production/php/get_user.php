<?php 
    include ("bd_connexion.php");

    $user = $bdd->query("SELECT * FROM user");
?>