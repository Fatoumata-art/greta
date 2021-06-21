<?php
class DetailsController extends Controller
{
    private $model;
    
    public function __construct()
    {
      $this->model = new FormationModel();
    }

    public function index(){       
        $this->render('details', );
  
    }
}


?>