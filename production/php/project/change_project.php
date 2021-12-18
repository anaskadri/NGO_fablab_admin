<?php

            // coonect to the DB
            include ("bd_connexion.php");
            
            $id=$_GET['id_project'];
            if(isset($_POST['titre_projet'])){
                $titre_project = $_POST['titre_projet'];
            }

            if(isset($_POST['description_projet'])){
                $description_project = $_POST['description_projet'];
            }
        
            $projet = $bdd->prepare("UPDATE projet SET titre_projet='$titre_project', description_projet='$description_project' WHERE id_projet='$id'");

            $projet->execute (array(
                    $titre_project,
                    $description_project
                    ));

            header('location: http://localhost:3000/fablab-admin/production/projets.php');
    ?>  