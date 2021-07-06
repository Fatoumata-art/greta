<?php
            $dsn = 'mysql:dbname=greta_lognes_77;host=127.0.0.1;charset=utf8'; 
            $user = 'root';
            $password = '';
            
            /*On imagine qu'on récupère les valeurs suivantes à partir d'un formulaire envoyé
             *par les utilisateurs*/
            if (isset($_POST['btn'])) {

            $id = htmlspecialchars($_POST['id']);
            $civilite = htmlspecialchars($_POST['civilite']);
            $nom = htmlspecialchars($_POST['nom']);
            $nom_jeune_fille = htmlspecialchars($_POST['nom_jeune_fille']);
            $nom_jeune_fille = htmlspecialchars($_POST['prenom']);
            $date_naissance = htmlspecialchars($_POST['date_naissance']);
            $photo = htmlspecialchars($_POST['photo']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $ville = htmlspecialchars($_POST['ville']);
            $code_postal = htmlspecialchars($_POST['code_postal']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $email = htmlspecialchars($_POST['email']);
            //$situation_pro = htmlspecialchars($_POST['situation_pro']);
            $niveau_etude = htmlspecialchars($_POST['niveau_etude']);
            $dernier_diplome = htmlspecialchars($_POST['dernier_diplome']);
            $langue = htmlspecialchars($_POST['langue']);

            $pdo= new PDO($dsn,$user,$password);
        
            $sql = ("INSERT INTO candidat
                     SET civilite='$civilite', nom='$nom', nom_jeune_fille='$nom_jeune_fille', date_naissance='$date_naissance', photo='$photo', adresse='$adresse', ville='$ville', code_postal='$code_postal', telephone='$telephone', email='$email', niveau_etude='$niveau_etude', dernier_diplome='$dernier_diplome', langue='$langue'");

            $pdo->exec($sql);

            header('location:../index.php'); 

    }
        
            
            // try{
            //     $pdo= new PDO($dsn,$user,$password);
            //     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //Récupération associatif par défaut
            //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);		// Debug Requêtes
                
            //     $dbco->beginTransaction();
                
            //     $sql = ("INSERT INTO formation 
            //     SET civilite='$civilite', nom='$nom', nom_jeune_fille='$nom_jeune_fille', date_naissance='$date_naissance', photo='$photo', adresse='$adresse', ville='$ville', code_postat='$code_postal', telephone='$telephone', email='$email', situation_pro='$situation_pro', niveau_etude='$niveau_etude', dernier_diplome='$dernier_diplome', langue='$langue'");

            //     $pdo->exec($sql);
            //     echo 'Entrée ajoutée dans la table';
            // }
            
            // catch(PDOException $e){
            //     $pdo->rollBack();
            //   echo "Erreur : " . $e->getPostulant();
            