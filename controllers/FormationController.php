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
    elseif($action_url == 'postuler')
    {
      $this->postuler($param1_url);
    } else{
      $this->index();
    }
  }


  public function detailsFormation($id)
  {

    $obj = $this->form->getdetailsById($id);
    /*echo "Je suis passe ici";
    var_dump($obj);
    exit;*/

    $this->render('details', array('formation' => $obj));
  } 


  protected function postuler($param1_url = null) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      echo "Candidat Postule......".$param1_url;

      $
      // on verifier que les champs requis ont été renseignès 
      // on recupere les infos et on stocke dans les tables candidat et parcourt
      // puis on redirige vers une autre vue

      $this->render('index');
      exit;
    } else {
      $this->render('postuler');
    }
  }

function insertForm($nom, $prenom, $email, $date,  $tel = null){
  //$this->form->getInsertForm();

}




  public function index()
  {
    $variables = $this->form->getAllFormations();

    $this->render('formation', $variables);
  }

  
}
