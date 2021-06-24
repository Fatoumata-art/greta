  <!-- Contact Start -->
  <div class="contact mt-125">
    <div class="container">
        <div class="section-header">
            
            
        </div>
        <div class="row align-items-left">
        
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                <h2>Administration</h2>
                    <div id="success"></div>
                    <form methode="" action="" id="adminForm" novalidate="">
                        <div class="control-group">
                            <span id='login_m'></span><br>
                            <input type="text" class="form-control" name="login" id="login" placeholder="Utilisateur" required="required" data-validation-required-message="Admin" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe" required="required" data-validation-required-message="Mot de passe" />
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