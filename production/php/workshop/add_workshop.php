<?php
    include ("bd_connexion.php");
    
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
        
        
    $ajout_workshop= $bdd->prepare("INSERT INTO workshops(titre_workshop, sous_titre_workshop, offre_workshop, duree_workshop, horaire_workshop, lieu_workshop) VALUES (?, ?, ?, ?, ?, ?)");
    $ajout_workshop->execute (array (
        $titre_workshop,
        $sous_titre_workshop,
        $offre_workshop,
        $duree_workshop,
        $horaire_workshop,
        $lieu_workshop
    ));
   
    header('location: http://localhost:3000/fablab-admin/production/workshops.php');
?>