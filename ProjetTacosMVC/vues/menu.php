<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Navbar responsive</title>
</head>
<body>
<!--les class qui vont servir pour le css (navbar et dark mode) et javacript (navbar et show-nav)-->
<--l'attribut role de la navbar dans l'accessiibility tree-->
<nav class="navbar dark-mode  fixed-top" role="navigation">
    <div class="navbar__logo">
        <a href="#">
            <img class="logos-1" title="lobo-tacos" src="assets/img/logo.jpeg" alt="lobo-tacos" width="100px">
        </a>
    </div>

<!--ma liste de menu-->
    <ul class="navbar__links">
        <li class="navbar__link first"> <a href="accueil">Accueil</a></li>
        <li class="navbar__link second"> <a href="#">Service</a></li>
        <li class="navbar__link third"> <a href="#">Menus</a></li>
        <li class="navbar__link four"> <a href="carteMenu">La carte</a></li>
        <li class="navbar__link fifth"> <a href="#">Contact</a></li>
    </ul>

    <!--faire appel à la route inscription(nouvel admin), connexion et déconnexion si l'admin est déja enregistré-->
    <button class="burger">
        <span class="bar "></span>
    </button>

    <form class="d-flex" id="btnConnexion">



        <?php
        //En cas de connexion, le bouton connexion devient deconnexion et en cas de déconnexion , le bouton devient connexion
        if(isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true){
            ?>
            <a href="inscription" class="m-3 btn btn-warning ">Inscription</a>
            <a class="m-3 btn " href="deconnexion" >Déconnexion</a>
            <style>
                #btnConnexion{
                    display: none;
                }
            </style>
            <?php
        }else{
            ?>

            <a href="connexion" class="m-3 btn btn-warning ">Connexion</a>

            <?php
        }
        ?>
    </form>

</nav>
<main class="main-content" role="main">
</main>


</body>
</html>