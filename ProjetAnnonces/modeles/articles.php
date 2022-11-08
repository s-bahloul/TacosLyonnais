<?php
//faire le namespace pour eviter de confondre les class s'il ont le même nom

namespace article;

//héritage de la classe mére database

require_once "../modeles/pdo.php";

//héritage database

class Article extends PdoConnect {

//faire la fonction pour la methode d'affichage
    public function affichArticles (){
        

    }
}