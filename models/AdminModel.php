<?php
class AdminModel extends Database
{
    private $db;


    public function __construct(){
    
         $this->db = new Database();
    }

    public function getUser($login, $pass) {
        $admin = $this->db->prepare("SELECT FROM utilisateur WHERE admin= ?  AND mot_de_passe= ?"); 
				
		$admin->execute(array( $login, $pass));

		return $admin->fetch();
    }
}