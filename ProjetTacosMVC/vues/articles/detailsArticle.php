<!--afficher les details de menu-->
<div class="container bg-info ">

    <h2 class="text-center text-dark p-4"><b>Details de menu</b></h2>

    <div class="container w-75 text-center" id="detailmenu">

        <img  src="<?= $details['img_menu'] ?>"/>

        <div class="card-body ">
            <h2 class="card-title"><?= $details['nom_menu'] ?></h2>
            <p class="card-text"><?= $details['description_menu'] ?></p>

        </div>

    </div>
</div>
