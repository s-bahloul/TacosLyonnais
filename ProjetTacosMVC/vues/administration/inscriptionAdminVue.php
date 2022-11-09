
<!--mon formulaire d'inscription avec la methode post et le boutton btn-inscription-admin qui déclache la fonction -->
<div class="container divAdmin">

    <div class="container cardTitre text-center">
        <h1 class="ml2 m-5 ">INSCRIPTION ADMINISTRATEUR</h1>

        <form method="post" id="form-admin">


            <div class="form-group">
                <label for="InputEmail1">Email</label>
                <input type="email" name="emailAdmin" class="form-control" id="InputEmail1" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="InputPassword1">Mot de passe</label>
                <input type="password" name="passwordAdmin" class="form-control" id="InputPassword1" placeholder="Mot de passe">
            </div>

            <div class="form-group">
                <label for="InputPassword1">Confirmer le mot de passe</label>
                <input type="password" name="passwordRepeter" class="form-control" id="InputPassword1" placeholder="Répéter le mot de passe">
            </div>

            <!--Ce bouton est recup via son attribut name et methode post $_POST['btn_valid_user']-->
            <div class="container mt-5 mb-5 ">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button name="btn-inscription-admin" type="submit" class="a-anime  mb-5 ">S'inscrire</button>
                    <a  href="accueil" class=" a-anime  mb-5  ">Annuler</a>
                </div>
            </div>
        </form>
    </div>
