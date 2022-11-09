<?php

class Database
{
    private $db_host = "localhost";
    private $db_dbname = "basetacos";
    private $db_user = "root";
    private $db_pass = "";

    private $isConnected = null;

    public function getPDO(){
        //la connexion est nul,

        if($this->isConnected === null){
            //connexion
            try{
                $this->isConnected = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_dbname.";charset=utf8", $this->db_user, $this->db_pass);

                //faire le debug
                $this->isConnected->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "C bon tu es connécté";


                return $this->isConnected;

                //message d'erreur
            }catch (PDOException $exception){
                echo "Erreur de connexion à PDO" .$exception->getMessage();
                die();
            }
        }
    }
}