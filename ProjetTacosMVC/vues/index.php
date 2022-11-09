<?php
//faire une session start pour démarer $_session
session_start();

//ob_start() ouvre un tampon dans lequel toutes les sorties sont stockées. Ainsi,
//chaque fois que vous faites un écho, la sortie de celui-ci est ajoutée au tampon

ob_start();
//Si dans url, un paramètre $_GET['url'] existe, on le stock dans une variable $url
//je fait appel à tous mes fichier controleurs
require_once '../controleurs/ArticlesControleur.php';
require_once '../controleurs/AdministrateurControleur.php';
require_once '../controleurs/CategoriesControleur.php';

if(isset($_GET['url'])){

    //stocker la route dans une variable
    $url = $_GET['url'];

//si non, $url = "accueil"
}else{
    $url = "accueil";
}

//Si $url retourne une chaine de caractères vide
if($url === ""){

    //redirection vers la page d'accueil
    $url = "accueil";
}


//Si $url = "accueil"
if($url === "pagesplach"){

// appeler le fichier accueil.php
afficherSplashPage();
//si non s'il ya une erreur

//afficher la page d'accuiel
}elseif ($url === "accueil"){
   afficherArticles();

//afficher le detail du menu
}elseif ($url === "detailsMenu") {
    afficherDetailsMenu();

//
}elseif ($url === "suppressionMenu" && isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true) {
    supprimerMenu();

//ajouter un menu
}elseif ($url === "ajouterMenu" && isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true) {
    ajouterUnMenu();


}elseif ($url === "editerMenu" && isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true) {
    editerUnMenu();

}elseif ($url === "carteMenu") {
    afficherCarte();

//quand la route macht sa va appeler la fonction
}elseif ($url === "connexion") {
    connexionAdmin();

}elseif ($url === "deconnexion") {
        deconnectAdmin();

}elseif ($url === "inscription" && isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true) {
    inscriptionAdmin();

}elseif($url !=  '#:[\w]+)#'){
    //faire la redirection vers la page d'accueil
    header("Location: pagesplach");


}

//ob_get_clean — exécute successivement ob_get_contents() et ob_end_clean().
//$contenus se situe dans le dossier template.php
$content = ob_get_clean();
require_once "template.php";


