<?php
class FormationModel extends Database
{
    private $db;


    public function __construct(){
    
         $this->db = new Database();
    }

    public function getAllFormations() {
        return $this->db->query('SELECT id, nom_formation, date_entree, date_sortie, duree, niveau_entree, niveau_sortie, financement FROM formation');
    }

    public function getDetailsById($id) {
        //var_dump($id);
        
        $res = $this->db->query('SELECT * FROM formations WHERE id='.$id);

        //var_dump($res->fetchObject());
        return $res->fetchObject();
    }

    
    /*
    public function getCategories(){
        return $this->db->query('SELECT id, nom FROM categories');
    }
    public function getSousCategories(){
        return $this->db->query('SELECT id, nom FROM sous_categories');
    } */
}