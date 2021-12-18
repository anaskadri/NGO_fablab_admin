<?php

            // coonect to the DB
            include ("bd_connexion.php");

            $id=$_GET['id_formation'];

            if(isset($_POST['titre_formation'])){
                $titre_formation = $_POST['titre_formation'];
            }

            if(isset($_POST['description_formation'])){
                echo "1=";
                $description_formation = $_POST['description_formation'];
                echo "1=";
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
                         move_uploaded_file($file_tmp,"fichier_uploaded/".$image_formation);

                      }else{

                      }
            }
        
            $formation = $bdd->prepare("UPDATE formation SET titre_formation='$titre_formation', description_formation='$description_formation', lien_formation='$lien_formation', image_formation='$image_formation' WHERE id_formation='$id'");

            $formation->execute (array(
                    $titre_formation,
                    $description_formation,
                    $lien_formation,
                    $image_formation
                    ));

            header('Location:http://localhost:3000/fablab-admin/production/formations.php');
    ?>  