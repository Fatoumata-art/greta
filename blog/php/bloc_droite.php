<div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="?">
                      <input type="text" name="q" class="searchText" placeholder="Recherche..." autocomplete="on">
                      <input type="hidden" name="blog">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Posts Récents</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php
                        $requete="SELECT id, titre, date FROM messages ORDER BY date DESC limit 3";
                
                        $query=$pdo->query($requete);

                        while($row=$query->fetch()):
                         
                          ?>
                           <li>
                              <a href="?msg=<?php echo $row['id']; ?>">
                               <h5><?php echo $row['titre']; ?></h5>
                               <span><?php echo $row['date']; ?></span>
                              </a>
                            </li>
                        <?php endwhile; ?>

                      
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php
                        $requete="SELECT DISTINCT categorie, id FROM categorie ORDER BY categorie limit 10";
                
                        $query=$pdo->query($requete);

                        while($row=$query->fetch()):
                          $id=$row['id'];
                          $categorie=$row['categorie'];
                        ?>

                          <li><a href="?blog&cat=<?php echo $id; ?>">- <?php echo $categorie; ?></a></li>

                          <?php endwhile; ?>

                       
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tags</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php
                        $requete="SELECT  DISTINCT tag, id FROM tags ORDER BY tag limit 10";
                        
                        $query=$pdo->query($requete);

                        while($row=$query->fetch()):
                         
                          $tag=$row['tag'];
                          ?>
                        <li><a href="?blog&tag=<?php echo $tag; ?>"><?php echo $tag; ?></a></li>
                      <?php endwhile; ?>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>