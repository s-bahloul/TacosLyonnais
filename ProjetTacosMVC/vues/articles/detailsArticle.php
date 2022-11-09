<!--afficher les details de menu-->
<div class="container text-center">

    <h1 class=" p-4 mt-5 ml2">Details de menu</h1>


    <div class="container w-75 " id="detailmenu">

        <img width="100%" src="<?= $details['img_menu'] ?>" alt="<?= $details['img_menu'] ?>" title="<?= $details['img_menu'] ?>"/>

        <div class="card-body ">
            <h2 class="card-title"><?= $details['nom_menu'] ?></h2>

            <h3 class="card-text text-white"><?= $details['description_menu'] ?></h3>
        </div>

    </div>
<div class="container">
    <div class="btn-group" role="group" aria-label="Basic example">
        <?php
        if(isset($_SESSION['connecterAdmin']) && $_SESSION['connecterAdmin'] === true){
            ?>
            <a  href="editerMenu" class=" a-anime   m-2  ">Mise à Jour</a>
        <a  href="ajouterMenu" class=" a-anime   m-2 ">Ajouter un Menu</a>
        <a  href="suppressionMenu" class=" a-anime   m-2 ">Supprimer un Menu</a>
        <?php
        }
        ?>

    </div>
</div>
<div class="container mt-5">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a  href="accueil" class="a-anime   m-2">Retour à l'acceuil</a>

    </div>
</div>

</div>
