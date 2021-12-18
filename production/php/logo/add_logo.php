<?php
    include ("bd_connexion.php");
    
    if(isset($_POST['nom_logo'])){
        $nom_logo = $_POST['nom_logo'];
    }

    if(isset($_FILES['lien_logo'])){
              $errors= array();
              $file_name = $_FILES['lien_logo']['name'];
              $file_size = $_FILES['lien_logo']['size'];
              $file_tmp = $_FILES['lien_logo']['tmp_name'];
              $file_type = $_FILES['lien_logo']['type'];
            
              $file_ext = explode('.',$_FILES['lien_logo']['name']);
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
              $lien_logo = rand(1, 1000000).'.'.$file_ext;} else {$lien_logo='null';}
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp, "fichier_uploaded/".$lien_logo);
                echo $lien_logo;
              }else{
                
              }
    }
        
        
    $ajout_logo= $bdd->prepare("INSERT INTO logo(nom_logo, lien_logo) VALUES (?, ?)");
    $ajout_logo->execute (array (
        $nom_logo,
        $lien_logo
    ));

    header('location: http://localhost:3000/fablab-admin/production/logos.php');
?>