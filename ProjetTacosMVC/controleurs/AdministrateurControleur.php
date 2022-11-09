<?php
//pour le raisonnement , la route dans l'index appele la fonction , la fonction du controleur appele la vue, on va pouvoir faire
// des var-dump et des $post pour afficher le contenu et récupérer les elements du formulaire

//Appel des modeles

require_once "../modeles/inscriptionAdmin.php";
require_once "../modeles/connexionAdmin.php";

//Inscrire un administrateur
function inscriptionAdmin(){

    //appel du fichier vue pour avoir accée au formulaire
    require_once "../vues/administration/inscriptionAdminVue.php";

    $inscription = new Administrateur();

    //récupérer le boutton btn-inscription-admin du formulaire, au clique sur le boutton , on récupére son name dans le controleur et il va déclancher la fonction

    if(isset($_POST['btn-inscription-admin'])){

    //la balise form dans le formulaire d'inscription nous mermet de récupérer le name grace à la méthode post
        if(isset($_POST['emailAdmin']) && !empty($_POST['emailAdmin']) && isset($_POST['passwordAdmin']) && !empty($_POST['passwordAdmin'])){
            if($_POST['passwordAdmin'] === $_POST['passwordRepeter']){

                //appel de la methode
                $inscription->nouvelAdmin();
                echo

                "<div class='text-center'><p class='alert alert-warning'>L'inscription est faite avec succès</p>
                        <a href='connexion' class='btn btn-warning'>Se connecter</a>
                    </div>";
                ?>

            //cacher le formulaire et faire apparaitre le message de succé et le bouton de connexion
                <style>
                    #form-admin{
                        display: none;
                    }
                </style>
                <?php
            }
        }
    }
}

//______________________________________________________________________________________________________

//fonction d'afficher le formulaire pour la connexion de l'administrateur
function connexionAdmin(){

//appeler le fichier vue
    require_once "../vues/administration/connexionAdminVue.php";

    //recupérer le name du formulaire pour activer le bouton de la connexion btn-connect-admin dans le fomulaire du fichier vues

    if(isset($_POST['btn-connect-admin'])){


        //Confirmer le mot de passe


            //faire une instance de la class inscription utilisateur pour récupérer le methode d'inscription dans le modele
            $connexion = new Connexion();
            $requete = $connexion->ConnexionAdmin();
            return $requete;


    }

}

//_______________________________________________________________________________
//fonction pour la deconnexion utilisateur
function deconnectAdmin(){

    //appeler le fichier vue
    require_once "../vues/administration/deconnexionAdminVue.php";

    //recupérer le name du formulaire pour activer le bouton de la connexion




}


