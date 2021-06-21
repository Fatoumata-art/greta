
        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Consulting Services</p>
                    <h2>Our Best Consulting Services</h2>
                </div>

                <div class="row">
                <?php 

                foreach($variables as $formations){

              
                
                
                ?>
                
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-1.png" alt="Icon">
                            <h3><?php echo $formations->nom_formation; ?></h3>
                            <p><?php echo $formations->date_entree; ?></p>
                            <p><?php echo $formations->date_sortie; ?></p>
                            <p><?php echo $formations->duree; ?>mois</p>
                            <p><?php echo $formations->niveau_entree; ?></p>
                            <p><?php echo $formations->niveau_sortie; ?></p>
                            <p><?php echo $formations->financement; ?></p>
                            <p><a href="formation-details-<?php echo $formations->id; ?>">En savoir plus</a></p>
                            <p><a href="formation-formulaire-<?php echo $formations->id; ?>">Postuler</a></p>
                        </div>
                    </div>
                    <?php
                }
             ?>
                 </div>
                 
            </div>
            
        </div>
        
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="feature-img">
                            <img src="img/business-man.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Notre particularité</p>
                            <h2>Pourquoi nous choisir?</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus 
                        </p>
                        <div class="row counters">
                            <div class="col-6">
                                <i class="fa fa-user"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">100</h2>
                                    <p>Our Staffs</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-users"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">200</h2>
                                    <p>Nos Candidats</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-check"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">300</h2>
                                    <p>Nos Ojectifs</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-running"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">400</h2>
                                    <p>chemin qui mène à la réussite</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->