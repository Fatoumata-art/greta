<?php
class AdminController extends Controller
{
    private $admin;


    public function __construct()
    {
      $this->admin = new AdminModel();
    }
 
 
     public function index(){
 
        $login =$_POST['login'];
        $pass=$_POST['pass'];

        $user = $this->admin->getUser($login, $pass);

        if (empty($user)) { // echec authentication on revient à la page connexion

        } else { // authentication réussi on affiche la page admin
        }
        
        return $this->render('admin');
     }


}