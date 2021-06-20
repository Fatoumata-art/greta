<?php

class FormationController extends Controller
{

  private $form;


  public function __construct()
  {
    $this->form = new FormationModel();
  }

  public function handle($action_url= null, $param1_url = null) {
    
    if($action_url== 'details'){
      $this->detailsFormation($param1_url);
    }
    elseif($action_url == 'formulaire')
    {
      $this->formulaire($param1_url);
    }
    else{
      $this->index();
    }

  }
  public function detailsFormation($id)
  {

    $obj = $this->form->getdetailsById($id);

    $this->render('details', array('formation' => $obj));
  } 


  protected function formulaire($param1_url = null) {

    $this->render('formulaire');
  }





  public function index()
  {
    $variables = $this->form->getAllFormations();

    $this->render('formation', $variables);
  }

  
}
