<?php

require_once "Database.php";

class Categories extends Database
{
    private $id_categorie;
    private $type_categorie;

    //Permet de lister toutes les gatégories
    public function afficherCategorie(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM categories";
        $categories = $db->query($sql);
        return $categories;
    }

}