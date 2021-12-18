<?php
include ("bd_connexion.php");

$email = htmlspecialchars ($_POST['email']);
//$mdp = htmlspecialchars ($_POST['mdp']);

$mdp_tohash = hash('sha256', $_POST['mdp']);

   
        $admin = $bdd->query("SELECT * FROM admin");
        $admin_infos= $admin->fetch();
       
        if ($mdp_tohash == $admin_infos['mdp_admin'] && $email== $admin_infos['email_admin'])
        {
            session_start ();
            $_SESSION["email"] = $admin_infos['email_admin'];
            header('Location: ../admin.php');
        
        }else{ header('Location: ../index.php');
             }
?>