<?php


//faire appel au fichier Database pour l'héritage
require_once "../modeles/Database.php";

//héritage de la classe mére Database

class Articles extends Database {
    public function donneesModeleArticles(){

        $db = $this->getPDO();

        ?>
        <div>
            <h1></h1>
        </div>

        <?php
        return $db;
    }



    public function donneesCarte(){

        $db = $this->getPDO();

        ?>

        <?php
        return $db;
    }


//afficher la page carte dans le menu
    public function afficherArticles(){

    $db = $this->getPDO();
    //faire la requete SQL

        $sql = "SELECT * FROM menus 
                INNER JOIN categories ON menus.categorie_id = categories.id_categorie 
                ORDER BY Rand() DESC";

        $Articles = $db->query($sql);
        return $Articles;


        return $db;
    }


    //Afficher le datail d'un menu
    public function afficherDetailsArticle(){

        //Coonexion PDO
        $db = $this->getPDO();
        //faire la requéte avec les jointures
        $sql = "SELECT * FROM menus 
                INNER JOIN categories ON menus.categorie_id = categories.id_categorie 
                WHERE id_menu = ?";

        //On va recupérer id de menu
        $this->id_menu = $_GET['id_details'];

        //Requète préparée
        $request = $db->prepare($sql);

        // on va lier les paramètres
        $request->bindParam(1, $this->id_menu);

        //Executer de la requète
        $request->execute();


        $details = $request->fetch();

    //le $details qui qervira à afficher les datails
        return $details;
    }

//supprimer un menu
    public function suprimerArticle(){

        //Appel  de la methode PDO
        $db = $this->getPDO();

        //faire la requète sql
        $sql = 'DELETE FROM `menus` WHERE `id_menu` = ?';

        //faire la requète péparée
        $suppMenu = $db->prepare($sql);
        $this->id_menu = $_GET['id_suppMenu'];

        //Lié id de Menu à $_Get id de l'url
        $suppMenu->bindParam(1, $this->id_menu);
        //Execution de la requète
        $delete = $suppMenu->execute();

        //Retourne l'objet avec son id
        return $delete;
    }



    public function ajouterMenu(){
        $db = $this->getPDO();
        //Les propriétés privée
        $this->nom_menu = trim(htmlspecialchars($_POST['nom_menu']));
        $this->description_menu = trim(htmlspecialchars($_POST['description_menu']));
        $this->img_menu = trim(htmlspecialchars($_POST['img_menu']));
        $this->categorie_id = trim(htmlspecialchars($_POST['categorie_id']));

        //Requète SQL :
        $sql = "INSERT INTO `menus`(`nom_menu`, `description_menu`, `img_menu`, `categorie_id`) VALUES (?,?,?,?)";

        //Requète préparée
        $insert = $db->prepare($sql);

        //Liés les paramètre du formulaire a la table phpmyadmin
        $insert->bindParam(1, $this->nom_menu);
        $insert->bindParam(2, $this->description_menu);
        $insert->bindParam(4, $this->img_menu);
        $insert->bindParam(6, $this->categorie_id);


        $insert->execute(array(
            $this->nom_menu,
            $this->description_menu,
            $this->img_menu,
            $this->categorie_id,
        ));
        return $insert;
    }


    public function editerMenu(){
        $db = $this->getPDO();
        //Les propriétés privée
        $this->nom_menu = trim(htmlspecialchars($_POST['nom_menu']));
        $this->description_menu = trim(htmlspecialchars($_POST['description_menu']));
        $this->img_menu = trim(htmlspecialchars($_POST['img_menu']));
        $this->categorie_id = trim(htmlspecialchars($_POST['categorie_id']));

        //Requète SQL :
        $sql = "UPDATE `menus` SET `nom_menu`= ?,`description_menu`= ?,`img-menu`= ?,`categorie-id`= ? WHERE id_menu = ?";

        //Requète préparée
        $update = $db->prepare($sql);

        $update->execute(array(
            $this->nom_menu,
            $this->description_menu,
            $this->img_menu,
            $this->categorie_id,
        ));
        return $update;
    }




}

