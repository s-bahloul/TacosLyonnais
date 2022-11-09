<?php


require_once "../modeles/Database.php";

//faire l'héritage Database
class Connexion extends Database {

    //je fait les propritées privées de l'admin
    private $idAdmin;
    private $nomAdmin ;
    private $emailAdmin ;
    private $passwordAdmin ;
    private $passwordRepete ;
    private $role;


//-----------------------------------------------------------------------------------------------------

    //faire la connexion pour l'admin
    public function ConnexionAdmin() {

        //faire appel à la methode public getPDO()

        $db = $this->getPDO();

        //Verifie si l'admin est deja connecté

        if (isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true) {

            //afficher le mail de l'admin
            ?>
            <h2>BIENVENUE<?= $_POST['emailAdmin'] ?></h2>
            <?php
            // Sinon, l'administrateur doit s'inscrire
        }else{

            echo "<div class='container text-center'>
                    <h5 class='alert-danger '>Veuillez vous inscrire <a href='inscription' class='btn btn-warning '>S'incrire</a></h5></div>
                    ";
        }

        //Verifier le champs de formulaire email et mot de passe
        if (isset($_POST['emailAdmin']) && !empty($_POST['emailAdmin'])) {

            $this-> emailAdmin = trim(htmlspecialchars($_POST['emailAdmin']));
        } else {

            //afficher le message d'erreur pour l'email
            echo "<h5 class='alert-warning p-5'>Merci remplir le champ Email</h5>";
        }
        //Verifier le mot de passe
        if (isset($_POST['passwordAdmin']) && !empty($_POST['passwordAdmin'])) {
            $this->passwordAdmin = trim(htmlspecialchars($_POST['passwordAdmin']));
        } else {
            //message d'erreur pour le mot de passe
            echo "<h5 class='alert-warning p-5'>Merci remplir le mot de passe</h5>";
        }

        //faire la requete
        if (!empty($_POST['emailAdmin']) && !empty($_POST['passwordAdmin'])) {

            $sql = "SELECT * FROM administrateur WHERE email_admin = ?";

            //Requète préparée
            $admin = $db->prepare($sql);



            $admin->bindParam(1, $this->emailAdmin);

            $admin->execute(
                array(
                    $this->emailAdmin,
                )
            );

            //parcourir la table admin
            if ($admin->rowCount() >= 1) {

                //afficher les elements
                $count =  $admin->fetch(PDO::FETCH_ASSOC);

                if ($this->emailAdmin === $count['email_admin']
                    && password_verify($this->passwordAdmin, $count['password_admin'])) {

                    //demarrer la  seesion qu'on stock dans une variable
                    session_start();

                    $_SESSION['connecterAdmin'] = true;
                    $_SESSION['emailAdmin'] = $this->emailAdmin;

                    //faire la redirection à la page d'accueil
                    header("Location: accueil");


                    //faire les message d'erreurs
                } else {
                    //pas d'egalité
                    echo "<p class='alert-warning p-2'>erreur email et mot passe ne sont pas correct !</p>";
                }
            } else {
                //table vide
                echo "<p class='alert-warning mt-3 p-2 text-center'>Aucun utilisateur ne possède cet email et mot de passe</p>";
            }
        } else {
            //champs vide
            echo "<p class='alert-warning text-center p-2'>Merci de remplir tous les champs</p>";
        }
    }
}


//--------------------------------------------------------------------------------------------------------



