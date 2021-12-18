<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['titre_projet'])){
        $titre_project = $_POST['titre_projet'];
    }

    if(isset($_POST['description_projet'])){
        $description_project = $_POST['description_projet'];
    }
        
        
    $ajout_project= $bdd->prepare("INSERT INTO projet(titre_projet, description_projet) VALUES (?, ?)");
    $ajout_project->execute (array (
        $titre_project,
        $description_project
    ));

    header('location: http://localhost:3000/fablab-admin/production/projets.php');
?>