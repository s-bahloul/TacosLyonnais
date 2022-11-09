  <?php

  //faire appel de la class Database pour récupérer la methode getPDO
 require_once "../modeles/Database.php";

  //faire l'héritage de la class Database
 class Administrateur extends Database{


 //Faire les propriétées privées de l'admin
     private $idAdmin;
     private $emailAdmin;
     private $passwordAdmin;

 //la methode nouvelAdmin va étre utiliser dans la fonction du controleur
   public function nouvelAdmin(){

        $db = $this->getPDO();

     //faire la requéte pour l'ajout de l'admin
            $sql = "INSERT INTO administrateur (email_admin, password_admin) VALUES (?,?)";

            $this->emailAdmin = trim(htmlspecialchars($_POST['emailAdmin']));
            $this->passwordAdmin = trim(htmlspecialchars($_POST['passwordAdmin']));

            $requete = $db->prepare($sql);

       $requete->bindParam(1, $this->emailAdmin);
       $requete->bindParam(2, $this->passwordAdmin);
            $hashPassword = password_hash($this->passwordAdmin, PASSWORD_DEFAULT);


       $requete->execute(array($this->emailAdmin, $hashPassword));
            return $requete;
        }
    }




