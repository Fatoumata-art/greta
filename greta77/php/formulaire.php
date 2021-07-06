

<div class="contact mt-125">
    
    <div class="container">
        <div class="section-header">
            <h1>Candidature</h1>
            <h2>Veuillez saisir ce formulaire</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12">
                <!-- civilité -->
                <div class="contact-form">
                    <div id="success"></div>
                        <fieldset>
                        <!--<form action="formation.php" method="post" name="inscription">-->
                            <form class="" action="php/insertform.php" method="post" novalidate>
                            <input type="hidden" name="id_formation" value="<?php echo $variables[0]; ?>" >
                                <!--cacher l'id dans la page virtuel envoiform-->
                                <input type="hidden" name="id" value="">
                                <h2>Candidat</h2>
                                <!--civilité-->
                                    <div class="form-group">
                                        
                                    <div class="form-row">     
                                                <div class="form-group col-md-6">
                                                <label class="form-check-label" for="civilite2">Civilité</label>
                                                <input type="text" class="form-control" name="civilite" placeholder="Madame, Monsieur ou Mademoiselle" name="nom">
                                                </div>
                                                 <!--nom-->
                                        <div class="form-group col-md-6">
                                            <label for="nom"> </label>
                                            <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
                                        </div>
                                         <!--nom de jeune fille-->
                                         <div class="form-group col-md-6">
                                            <label for="nom_jeune_fille"> </label>
                                            <input type="text" class="form-control" name="nom_jeune_fille" placeholder="Nom de jeune fille" name="nom_jeune_fille">
                                        </div>
                                        
                                        <!--prénom-->
                                        <div class="form-group col-md-6">
                                            <label for="prenom"></label>
                                            <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom">
                                        </div>
                                         <!--date de naissance-->
                                        <div class="form-group col-md-4">
                                            <label for="date_naissance">Date de naissance :</label>
                                            <input type="date" id="date_naissance" name="date_naissance">
                                        </div>
                                        <!--photo-->
                                        <div class="form-group col-md-4">
                                            <label for="photo">Photo :</label>
                                            <input type="file" id="photo" name="photo">
                                        </div>
                                        </div>
                                        <div class="form-row"> 

                                         <!--adresse-->
                                    <div class="form-group col-md-6">
                                        <label for="adresse" class="form-group col-md-6"> </label>
                                        <div class="col-sm-12">
                                        <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresse">
                                        </div>
                                    </div>
                                        <!--ville-->
                                   
                                        <div class="form-group col-md-6">
                                            <label for="ville"> </label>
                                            <input type="text" class="form-control" id="ville" placeholder="Ville" name="ville">
                                        </div>
                                        <!--code postal-->
                                        <div class="form-group col-md-6">
                                            <label for="code_postal"> </label>
                                            <input type="text" class="form-control" id="code_postal" placeholder="Code postal" name="code_postal">
                                        </div>
                                   
                                        <!--Téléphone portable-->
                                        <div class="form-group col-md-4">
                                            <label for="telephone"> </label>
                                            <input type="text" class="form-control" id="telephone" placeholder="Téléphone portable" name="telephone">
                                        </div>
                                        <!--E-mail-->
                                        <div class="form-group col-md-4">
                                            <label for="email"> </label>
                                            <input type="email" class="form-control" id="email" placeholder="@exemple.com" name="email">
                                            </div> 
                                        </div>
                                        <h2>Situation professionelle</h2>
                                <!--situarion professionnelle-->
                                    <div class="form-group">
                                        
                                    <div class="form-row">     
                                                <div class="form-group col-md-6">
                                                <label class="form-check-label" for="civilite2">Pole</label>
                                                <input type="text" class="form-control" id="situation_pro" placeholder=" Demandeur emploi" name="siruation_pro">
                                                </div>
                                                 <!--Niveau d'étude-->
                                        <div class="form-group col-md-6">
                                            <label for="niveau_etude"> </label>
                                            <input type="text" class="form-control" id="nom" placeholder="Bac+2" name="niveau_etude">
                                        </div>
                                         <!--Dernier diplôme-->
                                         <div class="form-group col-md-6">
                                            <label for="dernier_diplome"> </label>
                                            <input type="text" class="form-control" id=" " placeholder="Titre professionel " name="dernier_diplome">
                                        </div>
                                        
                                        <!--Langue parle-->
                                        <div class="form-group col-md-6">
                                            <label for="langue"></label>
                                            <input type="text" class="form-control" id="prenom" placeholder="Langue" name="langue">
                                        </div>
                                         <!--date de naissance-->
                                        <div class="form-group col-md-4">
                                            <label for="date_inscription">Date de naissance inscription à pôle :</label>
                                            <input type="date" id="date_ins" name="date_ins">
                                        </div>
                                       <!--dernier emploi-->
                                       <div class="form-group col-md-4">
                                            <label for="dernier_emploi">dernier emploi occupé :</label>
                                            <input type="text" id="dernier_emploi" name="dernier_emploi">
                                        </div>
                                        <div>
                                        </div>
                                        </div>
                                        <input class="btn btn-primary" type="submit" name="btn" value="Envoyer">
                                        </div>
                                        
                                       
                                      
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
         </fieldset>
    </div>




  