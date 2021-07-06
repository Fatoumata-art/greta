<?php
session_start();

 $_SESSION['jeton'];
 header('location:login.php');


 include('../connect/connect.php');
if (isset($_POST['connexion'])) {

   
     if (!empty($_POST['nom']) and !empty($_POST['password'])) {

         $nom_par_defaut = "toto";
         $mdp_par_default = "1234";
       

         $non_saisi = htmlspecialchars($_POST['login']);
              //htmlspecialchars c'est pour eviter que l'utilisateur rentre du code html dans le formulaire.


        $mdp_saisi = htmlspecialchars($_POST['password']);
    if ($non_saisi == $nom_par_defaut and $mdp_saisi == $mdp_par_default) {

             $_SESSION['jeton'] = $mdp_saisi;
             //verifie si l'uttilisateur est connecté
            header('location: index.php');
            
       } else {
            echo "le nom ou le mot de passe n'est valide";
         }
   } else {
        echo"veuillez remplir tous les champs";
    }


}
