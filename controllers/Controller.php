<?php
 class Controller 
 {
     //chemin vers les views
     private $chemin = "../views/";
     private $template = "../views/template/default.php";

     


     function render($views, $variables=[], $categories=[])
     {
     ob_start();
     extract($variables);

  require($this->chemin.$views.'.php');
   


     $contenu = ob_get_clean();

     
     require($this->template);

    }
 }


?>