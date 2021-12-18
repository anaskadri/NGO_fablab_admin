<?php

            // coonect to the DB
            include ("bd_connexion.php");
            
            $id=$_GET['id_event'];

            if(isset($_POST['date_event'])){
            $date_event = $_POST['date_event'];
            }
            if(isset($_POST['titre_event'])){
                        $titre_event = $_POST['titre_event'];
                        }
            if(isset($_POST['lien_event'])){
                        $lien_event = $_POST['lien_event'];
                        }
            
        
            $event = $bdd->prepare("UPDATE event SET 
            date_event='$date_event', 
            titre_event='$titre_event',
            lien_event='$lien_event' WHERE id_event='$id'");

            $event->execute (array(
                    $date_event,
                    $titre_event,
                    $lien_event
                    ));

            header('location: http://localhost:3000/fablab-admin/production/events.php');
    ?>  