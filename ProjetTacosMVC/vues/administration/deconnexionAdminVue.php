
<form method="post">
<div class="container text-center  p-4 mt-5">
    <button name="btnDeconnectAdmin" type="submit" class="btn btn-info">Deconnexion</button>
</div>
</form>


<?php
if(isset($_POST['btnDeconnectAdmin'])){

    session_start();
    $_SESSION = array();

    session_unset();
// detruire la session
    session_destroy();

//faire la redirection
    header("Location: connexion");
}

