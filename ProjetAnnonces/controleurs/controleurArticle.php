<?php

//faire appel au fichier modele acceuil
require_once "../modeles/articles.php";

//faire une fonction a appeler dans le routeur

function pagesplash(){

    //faire appel au fichier  vue de la page splash
    require_once "../vues/splachpage.php";

}

function afficherarticle(){
    //appel de la vue

    $articleclass = new Article();

    $articles = $articleclass->afficherArticles();

    require_once "../vues/accueil.php";

    return $articles;
}


//faire l'inscription pour la class Email
