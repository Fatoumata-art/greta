<?php
class FormationModel extends Database
{
    private $db;


    public function __construct(){
    
         $this->db = new Database();
    }

    public function getAllFormations() {
        
        $formations = $this->db->query('SELECT id, nom_formation, date_entree, date_sortie, duree, niveau_entree, niveau_sortie, financement FROM formation');

        return $formations->fetchAll();
    }

    public function getDetailsById($id) {
        //var_dump($id);
        
        $res = $this->db->query('SELECT * FROM formation WHERE id='.$id);  

        //var_dump($res->fetchObject());
        return $res->fetchObject();
    }
}