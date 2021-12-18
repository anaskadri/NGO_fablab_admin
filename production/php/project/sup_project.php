<?php
include("bd_connexion.php");

$id=$_GET['id_project'];
echo $id;
$bdd->query("DELETE FROM projet WHERE id_projet='$id'");
            
header('Location: http://localhost:3000/fablab-admin/production/projets.php');

?>