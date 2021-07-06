
        <!-- Single Page Start -->
    

        <?php

            if (isset($_GET['details'])) {
             $id = $_GET['details'];
            }
             
            $details=$pdo->query("SELECT * FROM formation WHERE id=$id");
            $res=$details->fetchAll();
            foreach($res as $val)
{    

        ?>
        <div class="single mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Details formation</p>
                    <h2></h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="img/single.jpg" alt="Image">
                        <h1><?php echo $val['nom_formation']; ?> </h1>
                        
                                                    
                        <p><?php echo $val['descriptif']; ?></p>

                        <ul class="ul-group">
                            <li><?php echo $val['date_entree']; ?></li>
                            <li><?php echo $val['date_sortie']; ?></li>
                            <li><?php echo $val['duree']; ?> mois</li>
                            <li><?php echo $val['niveau_entree']; ?></li>
                            <li><?php echo $val['niveau_sortie']; ?></li>
                        </ul>
                        <p><?php echo $val['descriptif']; ?></p>

                        <p><a href="index.php?formulaire=<?php echo $val['id']; ?>" class="btn btn-primary">Postuler</a></p>
        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <?php
            }

            ?>
        <!-- Single Page End -->