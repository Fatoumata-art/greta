<?php
	

class AccueilController extends Controller 
{
	private $form;

	public function __construct()
	{
	  $this->form = new FormationModel();
	}
	public function index()
	{
		$variables = $this->form->getAllFormations();
		$this->render('accueil', $variables);

	} 

}
