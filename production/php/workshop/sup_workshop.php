<?php
include("bd_connexion.php");

$id=$_GET['id_workshop'];
echo $id;
$bdd->query("DELETE FROM workshops WHERE id_workshop='$id'");
  

header('Location: http://localhost:3000/fablab-admin/production/workshops.php');

?>