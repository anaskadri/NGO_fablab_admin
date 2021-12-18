<?php
include("bd_connexion.php");

$id=$_GET['id_logo'];
echo $id;
$bdd->query("DELETE FROM logo WHERE id_logo='$id'");
            
header('Location: http://localhost:3000/fablab-admin/production/logos.php');

?>