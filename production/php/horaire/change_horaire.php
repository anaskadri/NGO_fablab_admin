<?php

            // coonect to the DB
            include ("bd_connexion.php");
            
            $id=$_GET['id_horaire'];
    
            if(isset($_POST['jour1'])){
            $jour1 = $_POST['jour1'];
            }
            if(isset($_POST['jour2'])){
            $jour2 = $_POST['jour2'];
            }
            if(isset($_POST['horaire1'])){
            $horaire1 = $_POST['horaire1'];
            }
            if(isset($_POST['horaire2'])){
                    $horaire2 = $_POST['horaire2'];
                }
        
            $horaire = $bdd->prepare("UPDATE horaire SET 
            horaire1='$horaire1', 
            horaire2='$horaire2',
            jour1='$jour1',
            jour2='$jour2' WHERE id_horaire='$id'");

            $horaire->execute (array(
                    $horaire1,
                    $horaire2,
                    $jour1,
                    $jour2
                    ));

            header('location: http://localhost:3000/fablab-admin/production/horaires.php');
    ?>  