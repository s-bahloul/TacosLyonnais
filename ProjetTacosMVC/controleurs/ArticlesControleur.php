<?php
//toujours appeler le fichier modele en premier et le fichier vus par la suite

require_once '../modeles/Articles.php';

//on va créer une fonction, cette fonction c'est c'elle appelée dans le routeur

// la fonction pour afficher la splashPage
function afficherSplashPage(){

    //faire l'instance de la classe Articles stocké dans une variable qui servira pour afficher la splash page
    $articlesClasse = new Articles();

    //stocker ça dans une segonde variable pour faire appel de la methode de la classe Article
    $articles = $articlesClasse->donneesModeleArticles();
    require_once  '../vues/splashpage.php';
    return $articles;

}

//la fonction pour afficher la page carte

function afficherCarte(){

    //faire l'instance de la classe Articles stocké dans une variable qui servira pour afficher la splash page
    $articlesClasse = new Articles();

    //stocker ça dans une segonde variable pour faire appel de la methode de la classe Article
    $carte = $articlesClasse->donneesCarte();
    require_once '../vues/carte.php';
    return $carte;

}




//la fonction pour afficher les articles de la table Menu
function afficherArticles(){

    $articlesClasse = new Articles();

    //stocker ça dans une segonde variable pour faire appel de la methode de la classe Article

    $articlesControlleur = $articlesClasse->afficherArticles();

    //on fait appel au fichier vue
    require_once  "../vues/accueil.php";
    //faire un return de notre variable qui fait appel à la methode afficherArticle
    return $articlesControlleur;
}

//la fonction pour afficher le detail de chaque menu
function afficherDetailsMenu()
{
    //faire une instance de la class Articles
    $article = new Articles();

    $details = $article->afficherDetailsArticle();
    //appele du fichier vue
    require_once "../vues/articles/detailsArticle.php";
    return $details;
}


//la foncion pour supprimer un menu
function supprimerMenu()
{
    //faire une instance de la classe Article dans le modele
    $article = new Articles();

    //récupérer la methode du modele et la stocker dans une variable
    $delete = $article->suprimerArticle();

    //faire le message de confirmation de la suppression
    if ($delete) {
        echo "<p class='alert alert-warning'>Votre Menu a bien été supprimé</p>";
        //faire la redirection
        header("Refresh:3 ;url=accueil", true, 303);
    }

}


//Ajouter un menu dans la base de donnée
function ajouterUnMenu()
{
    require_once "../vues/articles/ajouterArticle.php";
    $article = new Articles();

    //Si on click
    if (isset($_POST['btn_ajouter_menu'])) {

        //Upload de la photo
        if (isset($_FILES['img_menu'])) {
            $repertoire = "assets/img/";
            $img_article = $repertoire . basename($_FILES['img_menu']['name']);

            $_POST['img_menu'] = $img_article;
            if (move_uploaded_file($_FILES['img_menu']['tmp_name'], $img_article)) {
                echo "<p class='alert alert-success'>Le fichier est téléchargé avec succès !</p>";
            } else {
                echo "<p class='alert alert-danger'>Erreur lors du téléchargement de votre fichier !</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>Le fichier est invalide seul les format .png, .jpg, .bmp, .svg, .webp sont autorisé !</p>";
        }
        if (isset($_POST['nom_menu']) && isset($_POST['description_menu']) && isset($_POST['img_menu']) && isset($_POST['categorie_id'])){
            $ajouterMenu = $article->ajouterMenu();
            if ($ajouterMenu){

                echo "<p class='alert alert-success'>Votre menu  a bien été ajouté !</p>";
                header("Refresh:3; url=gestion_annonces", true, 303);
            } else {
                echo "<p class='alert alert-danger'>Une erreur est survenue durant l'ajout de votre annonce merci de réessayé !</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>Erreur : Merci de remplir tous les champs !</p>";
        }
    }


}

//Mettre à jour le menu
//Editer une annonce pour un utilisateur
function editerUnMenu()
{
    require_once "../vues/articles/editerArticle.php";
    $article = new Articles();

    //Si on click
    if (isset($_POST['btn_editer_menu'])) {

        //Upload de la photo
        if (isset($_FILES['img_menu'])) {
            $repertoire = "assets/img/";
            $img_article = $repertoire . basename($_FILES['img_menu']['name']);

            $_POST['img_menu'] = $img_article;
            if (move_uploaded_file($_FILES['img_menu']['tmp_name'], $img_article)) {

                echo "<p class='alert alert-success'>Le fichier est téléchargé avec succès !</p>";
            } else {
                echo "<p class='alert alert-danger'>Erreur lors du téléchargement de votre fichier !</p>";
            }
        }
        if (isset($_POST['nom_menu']) && isset($_POST['description_menu']) && isset($_POST['img_menu']) && isset($_POST['categorie_id'])){
            $editerMenu = $article->editerMenu();
            if ($editerMenu){
                ?>
                <style>
                    #editArticle {
                        display: none;
                    }
                </style>
                <?php

                echo "<p class='alert alert-success'>Votre menu  a bien été ajouté !</p>";
                header("Refresh:3; url=gestion_annonces", true, 303);
            } else {
                echo "<p class='alert alert-danger'>Une erreur est survenue durant l'ajout de votre annonce merci de réessayé !</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>Erreur : Merci de remplir tous les champs !</p>";
        }
    }


}