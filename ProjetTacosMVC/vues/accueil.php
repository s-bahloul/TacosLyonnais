<div class="container text-center mt-5">
    <a href="#">
        <img class="logos1 m-2" title="lobo-tacos" src="assets/img/logo3.png" alt="lobo-tacos" width="90px">
    </a>
    <span>
        <h2 class="ml2">TACOS</h2>
         <h2 class="ml2 text-white ">LYONNAIS</h2>
    </span>

    <?php

    if (isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true) {

        //afficher le mail de l'admin
        ?>
        <h2>BIENVENUE<?= $_SESSION['emailAdmin'] ?></h2>
        <?php
        // Sinon, l'administrateur doit s'inscrire
    }else{

        //var_dump($_SESSION['connecterAdmin']);

        echo "<div class='container text-center'>
                    <h5 class='alert-danger '>Veuillez vous inscrire <a href='inscription' class='btn btn-warning '>S'incrire</a></h5></div>
                    ";
    }
    ?>


</div>
    <div id="myCarousel" class="carousel slide bg-inverse w-100 ms-auto me-auto " data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="6"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="7"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="8"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/accueil.jpeg" alt="First slide">
                <div class="carousel-caption ml2">
                    <h1>TACOS LYONNAIS</h1>
                    <p>Bienvenue.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/pizzaD.jpg" alt="Second slide">
                <div class="carousel-caption ml2">
                    <h1>Venez gôuter</h1>
                    <p> Nos meilleures recettes.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/tacosB.jpg" alt="Third slide">
                <div class="carousel-caption ml2">
                    <h1>TACOS</h1>
                    <p>Gôutez..Savourez..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/burgerE.jpg" alt="Third slide">
                <div class="carousel-caption ml2">
                    <h1>Sandwich</h1>
                    <p>Gôutez..Savourez..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/nougatH.jpg" alt="Third slide">
                <div class="carousel-caption ml2">
                    <h1>Frites</h1>
                    <p>Gôutez..Savourez..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/tacosC.jpg" alt="Third slide">
                <div class="carousel-caption ml2">
                    <h1>Frites</h1>
                    <p>Gôutez..Savourez..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/drinkI.jpg" alt="Third slide">
                <div class="carousel-caption ml2">
                    <h1>Frites</h1>
                    <p>Gôutez..Savourez..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/burgerH.jpg" alt="Third slide">
                <div class="carousel-caption ml2">
                    <h1>Frites</h1>
                    <p>Gôutez..Savourez..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/burgerI.jpg" alt="Third slide">
                <div class="carousel-caption ml2">
                    <h1>Frites</h1>
                    <p>Gôutez..Savourez..</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
<div class="text-center">
    <h1 class=" text-center ml2">Nos Menus</h1>
</div>

 <div class="container">

    <div class="row justify-content-between custom-line mb-5">

        <?php
        //faire le foreach pour affincher ma table

        foreach ($articlesControlleur as $articles) {

        ?>

            <div class="col-md-4 p-2 divCard ">

                <div class="card zoom d-flex justify-content-center">

                    <div class="p-3 border cardTitre">

                        <h5 class=" text-center text-white m-3 "><?= $articles['nom_menu'] ?></h5>
                        <img src="<?= $articles['img_menu'] ?>" class="card-img-top img-fluid" alt="<?= $articles['nom_menu'] ?>" title="<?= $articles['nom_menu'] ?>">

                    </div>
                    <div class="card-body text-center text-dark m-2">
                        <p class="card-text"><?= $articles['description_menu'] ?></p>

                        </p>

                        <div class="container  text-center">
                            <a class="a-anime"  href="detailsMenu&id_details=<?= $articles['id_menu'] ?> ">Choisir le Menu</a>
                        </div>
                    </div>


                </div>
            </div>


        <?php
        }
         ?>

    </div>
     <video playsinline autoplay muted loop id="bgvid" poster="assets/img/videoPizza.mp4">
         <source src="assets/img/videoPizza.mp4" type="video/mp4">
     </video>


</div>


