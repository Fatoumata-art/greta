  <!-- Contact Start -->
  <div class="contact mt-125">
    <div class="container">
        <div class="section-header">
            
        <div class="row align-items-left">
        

        <?php 
		$bdd = new PDO('mysql:host=localhost;dbname=sitesimuvente', 'root', 'root');

		
		$login  = $_POST['login'];
		$pass  = $_POST['pass'];
		
	
		// Verifier dans la base de donnes la coherence des informations
		try 
			{
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$sel = $bdd->prepare("Select count(*) from connexions where login= ?  AND password= ?"); 
				
				$sel->execute(array( $login, $pass));
				$col = $sel->fetch();
				
				if($col[0]>=1){
    				
					echo "<i>Le client est enregistre dans la base! </i><br/>";	
					header("Location: SiteSimu.html");
				}
				else
				{
					echo "<i>Message : Desole vous n'etes pas enregistre dans la base!! ! </i><br/>";
					//echo "Enregistrez vous...";
					//header("Location: enregistrement.html");
				}
					
				// Fermeture BDD
				$bdd = null;
    			
			}
			catch (PDOException $e)
			{
				echo "Erreur : " . $e->getMessage() . "<br/>";
				die();
			}
	?>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                <h2>Administration</h2>
                    <div id="success"></div>
                    <form methode="post" action="FormationModel" id="adminForm" novalidate="">
                        <div class="control-group">
                            <span id='login_m'></span><br>
                            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant" required="required" data-validation-required-message="Admin" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control" name="pass" placeholder="Mot de passe" required="required" data-validation-required-message="Mot de passe" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <script type="text/javascript">

                        function myOver(){
                            //alert('Hello Admin');
                           // document.write('Vers');

                        }
                        </script>    
         
                        <div>

                        <button class="btn" type="submit" id="submit">Connexion</button>
                           <!-- <a onmouseover="myOver();" ><button class="btn" type="submit" id="submit">Connexion</button></a> -->

                        <script>

                        var validation = document.getElementById('submit');
                        validalidation.addEventListener('click', f_valid);
                        var login = document.getElementById('login');
                        var ligin_m = document.getElementById('login_manquant');
                        var password = document.getElementById('password');

                        function f_valid(e){
                            if(login.validity.valueMissing){
                                e.preventDefault();
                            login.textContext = 'Veillez entrer le bon identifiant';
                            password.texContent = 'Mot de Passe incorrect';
                            }
                           
                        }

                        </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->