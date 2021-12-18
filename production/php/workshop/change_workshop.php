<?php

            // coonect to the DB
            include ("bd_connexion.php");
            
            $id=$_GET['id_workshop'];
             if(isset($_POST['titre_workshop'])){
            $titre_workshop = $_POST['titre_workshop'];
            }
            if(isset($_POST['sous_titre_workshop'])){
                    $sous_titre_workshop = $_POST['sous_titre_workshop'];
                }
            if(isset($_POST['offre_workshop'])){
                    $offre_workshop = $_POST['offre_workshop'];
                }
            if(isset($_POST['duree_workshop'])){
                    $duree_workshop = $_POST['duree_workshop'];
                }
            if(isset($_POST['horaire_workshop'])){
                    $horaire_workshop = $_POST['horaire_workshop'];
                }
            if(isset($_POST['lieu_workshop'])){
                    $lieu_workshop = $_POST['lieu_workshop'];
                }
        
            $workshop = $bdd->prepare("UPDATE workshops SET 
            titre_workshop='$titre_workshop', 
            sous_titre_workshop='$sous_titre_workshop',
            offre_workshop='$offre_workshop',
            duree_workshop='$duree_workshop',
            horaire_workshop='$horaire_workshop',
            lieu_workshop='$lieu_workshop' WHERE id_workshop='$id'");

            $workshop->execute (array(
                    $titre_workshop,
                    $sous_titre_workshop,
                    $offre_workshop,
                    $duree_workshop,
                    $horaire_workshop,
                    $lieu_workshop
                    ));

            header('location: http://localhost:3000/fablab-admin/production/workshops.php');
    ?>  