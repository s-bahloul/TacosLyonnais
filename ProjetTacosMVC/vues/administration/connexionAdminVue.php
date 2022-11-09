

<div class="container divAdmin">

    <div class="container cardTitre  text-center">

        <h2 class=" ml2 mt-5 ">CONNEXION ADMINISTRATEUR</h2>

        <form method="post" id="form-admin">

            <div class="form-group">
                <label for="InputEmail1">Email</label>
                <input type="email" name="emailAdmin" class="form-control" id="InputEmail1" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="InputPassword1">Mot de passe</label>
                <input type="password" name="passwordAdmin" class="form-control" id="InputPassword1" placeholder="Mot de passe">
            </div>


            <!--Ce bouton est recup via son attribut name et methode post $_POST dans le formulaire-->


            <div class="container mt-5 mb-5 ">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button name="btn-connect-admin" type="submit" class="a-anime  mb-5 ">Se connecter</button>
                    <a  href="accueil" class=" a-anime  mb-5  ">Annuler</a>
                </div>
            </div>
        </form>
    </div>

</div>



