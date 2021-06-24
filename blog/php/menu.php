<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="?"><h2>Blog de test<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php echo ((empty($_GET) ? 'active':'')); ?>">
                <a class="nav-link" href="?">Accueil
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item <?php echo ((isset($_GET['apropos']) ? 'active':'')); ?>">
                <a class="nav-link" href="?apropos">A Propos</a>
              </li>
              <li class="nav-item <?php echo (((isset($_GET['blog']) OR isset($_GET['msg'])) ? 'active':'')); ?>">
                <a class="nav-link" href="?blog">Blog</a>
              </li>
              <li class="nav-item <?php echo ((isset($_GET['contact']) ? 'active':'')); ?>">
                <a class="nav-link" href="?contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>