
        <!-- Single Page Start -->
        <div class="single mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Details formation</p>
                    <h2></h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="img/single.jpg" alt="Image">
                        <h1><?php echo $formation->nom_formation; ?> </h1>
                        
                                                    
                        <p><?php echo $formation->descriptif; ?></p>

                        <ul class="ul-group">
                            <li><?php echo $formation->date_entree; ?></li>
                            <li><?php echo $formation->date_sortie; ?></li>
                            <li><?php echo $formation->duree; ?></li>
                            <li><?php echo $formation->niveau_entree; ?></li>
                            <li><?php echo $formation->niveau_sortie; ?></li>
                        </ul>
                        <p><?php echo $formation->descriptif; ?></p>
                            
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Page End -->