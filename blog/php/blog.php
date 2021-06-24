    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Posts Récents</h4>
                <h2>Nos dernières infos</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="blog-posts grid-system">
      <div class="container">

        <div class="row">
          <div class="col-lg-8">

            <?php
              $nb_par_pages=6;                                        // Nombre de messages affichés sur une page
              $page_en_cours=(isset($_GET['page']))?$_GET['page']:1;  // Détermine la page en cours 
              $offset=($page_en_cours-1)*$nb_par_pages;               // Détermine le décalage a effectuer pour la requête SQL


              // Cas 1: Détermine si une recherche a été faite par mot clé (moteur de recherche interne)
              $q=(isset($_GET['q']))?filter_var($_GET['q'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH):false;
              
              // Cas 2: Détermine si une recherche par catégorie a été faite 
              $id_categorie=(isset($_GET['cat']))? filter_var($_GET['cat'],FILTER_SANITIZE_NUMBER_INT):false;  

               
              // Cas 3: Détermine si une recherche par tag a été faite 
              $nom_tag=(isset($_GET['tag']))?filter_var($_GET['tag'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH):false;  

              
              ///////////////////////////////////////////////////////////
              ///
              // Détermination du NOMBRE TOTAL DE RESULTATS en fonction des cas d'affichage (pour la pagination)
              //
              // $where définit le Complément à la requete principale selon les cas
              // 
                
              // 1. CAS où une recherche via le champ de recherche a été lancée
              $where=($q)?"WHERE titre like :q OR message like :q OR auteur like :q":false;


              // 2. Cas où une recherche par catégorie a été lancée.
              $where=($id_categorie)?"INNER JOIN cat_msg ON cat_msg.id_msg=messages.id WHERE cat_msg.id_cat=:id_categorie AND cat_msg.id_cat=categorie.id":$where;


              // 3. Cas où sélection d'un TAG               
              $where=($nom_tag)?"INNER JOIN tag_msg ON tag_msg.id_msg=messages.id INNER JOIN tags ON tags.id=tag_msg.id_tag WHERE tags.tag=:nom_tag":$where;

            
              // Construction de la requête selon les cas (ajout du $where)
              // Cette requête sera réutilisée pour l'affichage des messages (d'où la présence des champs sélectionné 
              // en nombre, et du ORDER BY inutile normalement pour un simple décompte)
              
              $requete_nb="
                  SELECT messages.id as id, categorie.categorie as cat, titre, message, auteur, DATE_FORMAT(date,'%d-%m-%Y') as date, image 
                  FROM categorie, messages $where
                  GROUP BY messages.id 
                  ORDER BY date DESC";

              

              $query_nb=$pdo->prepare($requete_nb);

              // Ajout des paramètres de la requête préparée selon les cas
              if($q)                { $query_nb->bindValue('q','%'.$q.'%',PDO::PARAM_STR);                } 
              if($nom_tag)          { $query_nb->bindValue('nom_tag',$nom_tag,PDO::PARAM_STR);            } 
              if($id_categorie)     { $query_nb->bindValue('id_categorie',$id_categorie,PDO::PARAM_INT);  } 


              $query_nb->execute();   

              $resultats=$query_nb->fetchAll();

              // Enfin! Stockage du nombre de résultats:-)
              $nb_resultats=count($resultats);

              // Qui nous permet de déterminer le nombre de page à afficher dans la pagination
              $nb_pages=ceil($nb_resultats/$nb_par_pages);

               
                
              // Affichage du nombre de résultats dans le cas d'une recherche par moteur interne
              
              if($q): 

                $s=($nb_resultats>1)?'s':false; // Gestion du s pour le pluriel de résultat(s)

                  if ($nb_resultats==0) { $info="Aucun"; $style="alert-danger";         }   // Si pas de résultat message en rouge
                else                    { $info=$nb_resultats; $style="alert-success";  }   // Sinon message en vert
                 
              ?>
              
                  <div class="col-lg-12">
                    <div class="text-center alert <?php echo $style; ?>" role="alert"><?php echo $info; ?> résultat<?php echo $s; ?> pour la recherche <strong>"<?php echo $q; ?>"</strong>
                    </div>
                  </div>
              <?php endif; ?>
               


              <?php if($nb_resultats>0): ?>      

                <div class="all-blog-posts">
                  <div class="row">


                <?php
                                      
                // Contruction de la requête pour la récupération des messages 
                // Basée sur la requête de décompte auquel on ajoute le limit
                $requete=$requete_nb." limit :offset,:nb_par_pages";
                                       
              
                $query=$pdo->prepare($requete);

                // Paramètre de la requête préparée
                $query->bindValue('offset',$offset,PDO::PARAM_INT);
                $query->bindValue('nb_par_pages',$nb_par_pages,PDO::PARAM_INT);

                // Idem précédemment, paramètres de la requete préparée mais selon le cas
                if($q)                { $query->bindValue('q','%'.$q.'%',PDO::PARAM_STR);                } 
                if($nom_tag)          { $query->bindValue('nom_tag',$nom_tag,PDO::PARAM_STR);            } 
                if($id_categorie)     { $query->bindValue('id_categorie',$id_categorie,PDO::PARAM_INT);  } 
           

                $query->execute();
              

                // On boucle sur les messages
                while($row=$query->fetch()):
                  $id=$row['id'];
                  $categorie=$row['cat'];
                  $titre=$row['titre'];
                  $message=substr(strip_tags($row['message']), 0, 250)."[...]"; // On affiche un extrait du message...
                 
                  $auteur=$row['auteur'];
                  $date=$row['date'];
                  $image=$row['image'];

                  // Récupération des tags des messages via une requête, stockage dans un tableau
                  $requete_tags="SELECT  tags.tag as tag FROM tags INNER JOIN tag_msg ON tag_msg.id_tag=tags.id WHERE id_msg=:id";
                  $query_tags=$pdo->prepare($requete_tags);

                  $query_tags->bindValue('id',$id,PDO::PARAM_INT);
                  
                  $query_tags->execute();
                  $tab_tags=$query_tags->fetchAll();
                
                ?>
           
                <div class="col-lg-6">
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
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                             
                              <?php foreach ($tab_tags as $tag): ?>

                                <li><a href="?blog&tag=<?php echo $tag['tag']; ?>"><?php echo $tag['tag']; ?></a>,</li>

                              <?php endforeach; ?>
                             
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <?php endwhile; // Fin du bouclage sur les messages 

                /////////////////////////////////
                // Pagination
                // 
                // On prépare le lien hypertexte de la pagination selon les 3 cas
                               
                $url=($q)?"&q=$q":false; 
                $url=($id_categorie)?"&cat=$id_categorie":$url; 
                $url=($nom_tag)?"&tag=$nom_tag":$url;  
                ?>

                <div class="col-lg-12">
                  <ul class="page-numbers">
                    <?php if($page_en_cours!=1): // On affiche le lien précédent uniquement si on est pas sur la première page ?>
                            <li>
                              <a href="?blog&page=<?php echo $page_en_cours-1; ?><?php echo $url; ?>"><i class="fa fa-angle-double-left"></i></a>
                            </li>
                    <?php endif; ?>

                    
                    <?php
                    for($i=1;$i<=$nb_pages;$i++):
                    ?>
                    <li <?php echo ($page_en_cours==$i)?'class="active"':false; ?>><a href="?blog&page=<?php echo $i; ?><?php echo $url; ?>"><?php echo $i; ?></a></li>
                    
                    <?php endfor; ?>

                  
                    <?php if($page_en_cours!=$nb_pages): // On affiche le lien suivant uniquement si on est pas sur la dernière page ?>
                            <li>
                              <a href="?blog&page=<?php echo $page_en_cours+1; ?><?php echo $url; ?>"><i class="fa fa-angle-double-right"></i></a>
                            </li>
                    <?php endif; ?>
                   
                   
                  </ul>
                </div>
              </div>
            </div>

            <?php endif; ?>

          </div>
          
          <?php include("php/bloc_droite.php"); ?>


        </div>
      </div>
    </section>
