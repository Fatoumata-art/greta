  <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

           <?php
               
                 $requete="
                  SELECT messages.id as id, categorie, titre, message, auteur, DATE_FORMAT(date,'%d-%m-%Y') as date, image 
                  FROM messages
                  INNER JOIN cat_msg ON cat_msg.id_msg=messages.id 
                  INNER JOIN categorie ON cat_msg.id_cat=categorie.id 
                  ORDER BY date DESC";


                $query=$pdo->query($requete." limit 10");

                while($row=$query->fetch()):
                  $id=$row['id'];
                  $categorie=$row['categorie'];
                  $titre=$row['titre'];
                              
                  $auteur=$row['auteur'];
                  $date=$row['date'];
                  $image=$row['image'];

                ?>
                  <div class="item">
                    <img src="assets/images/banner-item-01.jpg" alt="">
                    <div class="item-content">
                      <div class="main-content">
                        <div class="meta-category">
                          <span><?php echo $categorie; ?></span>
                        </div>
                        <a href="?msg=<?php echo $id; ?>"><h4><?php echo $titre; ?></h4></a>
                        <ul class="post-info">
                          <li><a href="#"><?php echo $auteur; ?></a></li>
                          <li><a href="#"><?php echo $date; ?></a></li>
                          <li><a href="#">12 Comments</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
        
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

                <?php
               
                               
                $query=$pdo->query($requete." limit 3");

                while($row=$query->fetch()):
                  $id=$row['id'];
                  $categorie=$row['categorie'];
                  $titre=$row['titre'];
                  $message=substr(strip_tags($row['message']), 0, 240)."[...]";
                 
                  $auteur=$row['auteur'];
                  $date=$row['date'];
                  $image=$row['image'];


                  $requete_tags="SELECT  tags.tag as tag FROM tags INNER JOIN tag_msg ON tag_msg.id_tag=tags.id WHERE id_msg=:id";
                  $query_tags=$pdo->prepare($requete_tags);

                  $query_tags->bindValue('id',$id,PDO::PARAM_INT);
                  
                  $query_tags->execute();
                  $tab_tags=$query_tags->fetchAll();

                ?>

                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="images/<?php echo $image; ?>" alt="">
                    </div>
                    <div class="down-content">
                      <span><?php echo $categorie; ?></span>
                      <a href="?msg=<?php echo $id; ?>"><h4><?php echo $titre; ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $auteur; ?></a></li>
                        <li><a href="#"><?php echo $date; ?></a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <p><?php echo $message; ?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                             <?php foreach ($tab_tags as $tag): ?>

                                <li><a href="?blog&tag=<?php echo $tag['tag']; ?>"><?php echo $tag['tag']; ?></a>,</li>

                              <?php endforeach; ?>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>


           
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="?blog">Voir tous les Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <?php include("php/bloc_droite.php"); ?>
        </div>
      </div>
    </section>