<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['titre_formation'])){
        $titre_formation = $_POST['titre_formation'];
    }

    if(isset($_POST['description_formation'])){
        $description_formation = $_POST['description_formation'];
    }


    if(isset($_POST['lien_formation'])){
        $lien_formation = $_POST['lien_formation'];
    }

    if(isset($_FILES['image_formation'])){
              $errors= array();
              $file_name = $_FILES['image_formation']['name'];
              $file_size = $_FILES['image_formation']['size'];
              $file_tmp = $_FILES['image_formation']['tmp_name'];
              $file_type = $_FILES['image_formation']['type'];
            
              $file_ext = explode('.',$_FILES['image_formation']['name']);
              $file_ext=end($file_ext);
              $file_ext=strtolower($file_ext);
               
              $expensions= array("jpeg","jpg","png");

              if(in_array($file_ext,$expensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
              }

              if($file_size > 200097152) {
                 $errors[]='File size must be excately 2 MB';
              }
                if (!empty($file_ext)){
              $image_formation = rand(1, 1000000).'.'.$file_ext;} else {$image_formation='null';}
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp, "fichier_uploaded/".$image_formation);
            
              }else{
                
              }
    }
        
        
    $ajout_formation= $bdd->prepare("INSERT INTO formation(titre_formation, description_formation, lien_formation, image_formation) VALUES (?, ?, ?, ?)");
    $ajout_formation->execute (array (
        $titre_formation,
        $description_formation,
        $lien_formation,
        $image_formation
    ));

    header('location: http://localhost:3000/fablab-admin/production/formations.php');
?>