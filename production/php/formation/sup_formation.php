<?php
include("bd_connexion.php");

$id=$_GET['id_formation'];
echo $id;
$bdd->query("DELETE FROM formation WHERE id_formation='$id'");
            
header('Location: http://localhost:3000/fablab-admin/production/formations.php');

?>