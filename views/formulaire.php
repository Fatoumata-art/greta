<!-- Contact Start -->
<div class="contact mt-125">
    <div class="container">
        <div class="section-header">
            <h1>Candidature</h1>
            <h2>Veuillez saisir ce formulaire</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-7">

                <div class="contact-form">
                    <div id="success"></div>
                    <fieldset>
                    <form action="formationModel.php" methode="POST" name="inscription">

                    <!--civilité-->
                    <p>
                    <label for="civilite">Civilité :</label><br>
                    Madame <input type="radio" value="1" name="madame" id="txtCivilite1">
                    Monsieur <input type="radio" value="2" name="monsieur" id="txtCivilite2">
                    </p>

                    <!--nom-->
                    <p>
                    <label for="nom">NOM :</label>
                    <input type="text" id="nom" name="nom">
                    </p>

                    <!--prénom-->
                    <p>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom">
                    </p>

                    <!--nom de jeune fille-->
                    <p>
                    <label for="nom_jeune_fille">NOM de jeune fille :</label>
                    <input type="text" id="nom_jeune_fille" name="nom_jeune_fille">
                    </p>

                    <!--photo-->
                    <p>
                    <label for="photo">Photo :</label>
                    <input type="file" id="photo" name="photo">
                    </p>

                    <!--adresse-->
                    <p>
                    <label for="adresse">Adresse :</label>
                    <input type="text" id="adresse" name="adresse">
                    </p>

                    <!--ville-->
                    <p>
                    <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville">
                    </p>

                    <!--code postal-->
                    <p>
                    <label for="code_postal">Code postal :</label>
                    <input type="text" id="code_postal" name="code_postal">
                    </p>

                    <!--Téléphone fixe-->
                    <p>
                    <label for="tel_fixe">Téléphone fixe :</label>
                    <input type="text" id="tel_fixe" name="tel_fixe">
                    </p>

                    <!--Téléphone portable-->
                    <p>
                    <label for="telephone_portable">Téléphone portable :</label>
                    <input type="text" id="telephone_portable" name="telephone_portable">
                    </p>

                    <!--E-mail-->
                    <p>
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email">
                    </p>
                    </form>
                    </fieldset>
                </div>
                
                <div class="contact-form">
                    <div id="success"></div>
                    <fieldset>
                    <form action="formation.php" methode="post" name="inscription">


                    <h2>Etat civile :</h2>
                    <!--date de naissance-->
                    <p>
                    <label for="date_naissance">Date de naissance :</label>
                    <input type="date" id="date_naissance" name="date_naissance">
                    </p>

                    <!--age-->
                    <p>
                    <label for="age">

                    <?php
                      /*$dateNaissance = "24-08-1995";*/
                      /*
                      $aujourdhui = date("Y-m-d");
                      $diff = date_diff(date_create($val->date_naissance), date_create($aujourdhui));
                      echo 'Age : '.$diff->format('%y').' ans';
                      */
                    ?>

                    </label>
                    <!--<input type="number" id="age" name="age">-->
                    </p>

                    <!--nationalité-->
                    <p>
                    <label for="nationalite">Nationalité :</label><br>
                    <input type="text" id="nationalite" name="nationalite">
                    </p>

                    <!--lieu de naissance-->
                    <p>
                    <label for="lieu_naissance">Lieu de naissance :</label>
                    <input type="text" id="lieu_naissance" name="lieu_naissance">
                    </p>

                    <!--si nationalité étrangére-->
                    <p>
                    <label for="etranger">Si nationalité étrangére :</label><br>
                    carte de résident <input type="radio" value="1" name="etranger" id="txtEtranger1" >
                    carte de séjour <input type="radio" value="2" name="etranger" id="txtEtranger2" >
                    </p>

                    <!--date validité-->
                    <p>
                    <label for="date_validité">Date de validité :</label>
                    <input type="date" id="date_validité" name="date_validité">
                    </p>

                    <!--état civile-->
                    <p>
                    <label for="etat_civile">Etat civile :</label><br>
                    Célibataire <input type="radio" value="1" name="civilite" id="txtEtat_civile1" checked>
                    Marié(e) <input type="radio" value="2" name="civilite" id="txtEtat_civile2" >
                    Pacsé(e) <input type="radio" value="3" name="civilite" id="txtEtat_civile3" >
                    Autre (préciser) <input type="radio" value="4" name="civilite" id="txtEtat_civile4" >
                    <input type="text" id="etat_civile" name="etat_civile">
                    </p>

                    <!--numéro de sécurité sociale-->
                    <p>
                    <label for="num_securite_sociale">Numéro de sécurité sociale :</label>
                    <input type="text" id="num_securite_sociale" name="num_securite_sociale">
                    </p>

                    <!--nombre d'enfants à charge-->
                    <p>
                    <label for="nationalite">Nombre d'enfants à charge :</label>
                    <input type="number" id="nb_enfants_a_charge" name="nb_enfants_a_charge">
                    </p>

                    <!--Reconnaissance travailleur handicapé-->
                    <p>
                    <label for="rth">Reconnaissance travailleur handicapé :</label><br>
                    Non <input type="radio" value="1" name="civilite" id="txtRth1" checked>
                    Oui <input type="radio" value="2" name="civilite" id="txtRth2" >(joindre justificatif)
                    <input type="file" id="rth" name="rth">
                    </p>

                    <!--permis de conduire-->
                    <p>
                    <label for="permis_de_conduire">Permis de conduire :</label>
                    A <input type="checkbox" value="1" name="permis_de_conduire" id="txtPermis_de_conduire1" >
                    B <input type="checkbox" value="2" name="permis_de_conduire" id="txtPermis_de_conduire2" >
                    C <input type="checkbox" value="3" name="permis_de_conduire" id="txtPermis_de_conduire3" >
                    D <input type="checkbox" value="4" name="permis_de_conduire" id="txtPermis_de_conduire4" >
                    E <input type="checkbox" value="5" name="permis_de_conduire" id="txtPermis_de_conduire5" >
                    </p>

                    <!--véhicule personnel-->
                    <p>
                    <label for="vehicule">Véhicule personnel :</label>
                    Oui <input type="radio" value="1" name="vehicule" id="txtVehicule1" >
                    Non <input type="radio" value="2" name="vehicule" id="txtVehicule2" >
                    </p>
                    </form>
                    </fieldset>
                </div>
                
                <div class="contact-form">
                    <div id="success"></div>
                    <fieldset>
                    <form action="formation.php" methode="post" name="inscription">
                 
                    <h2>Contact :</h2>
                    <!--nom contact-->
                    <p>
                    <label for="nom_contact">NOM contact :</label>
                    <input type="text" id="nom_contact" name="nom_contact">
                    </p>

                    <!--prénom contact-->
                    <p>
                    <label for="prenom_contact">Prénom contact :</label>
                    <input type="text" id="prenom_contact" name="prenom_contact">
                    </p>

                    <!--Téléphone contact-->
                    <p>
                    <label for="tel_contact">Téléphone contact :</label>
                    <input type="text" id="tel_contact" name="tel_contact">
                    </p>

                    <p>
                    <input type="submit" name="Envoyer" value="Envoyer">
                    <input type="reset" name="Annuler" value="Annuler">
                    </p>
                    
                    <p>

                    <input type="submit" name="Suivant" value="Suivant"href="situation">
                        
                    <!--
                        <a class="btn <?php //echo ($view=="scolarite")?'active':null; ?> " href="formation-scolarite-<?php //echo $scolarite->id; ?>">Vers scolarite</a>
                    -->
                    
                    <input type="reset" name="Annuler" value="Annuler">
                    </p>
                    </form>
                    </fieldset>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->