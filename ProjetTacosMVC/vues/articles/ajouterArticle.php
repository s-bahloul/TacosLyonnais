<div class="container text-center">
    <!--créer le formulaire et utiliser l"ID pour le traitement-->

    <form  method="post" id="form-update"  enctype="multipart/form-data">
        <h2 class="text-center  m-5">AJOUTER UN MENU</h2>

        <div class="md-3">
            <label for="nom_menu" class="text-white">Nom du Menu</label>
            <input type="text" class="form-control" id="nomMenu" name="nom_menu" placeholder="Nom du menu" required>
        </div>

        <div class="-md-3">
            <label for="description_menu" class="text-white">Description du Menu</label>
            <textarea rows="4" class="form-control" id="descriptionMenu" name="description_menu" placeholder="Description du menu" required></textarea>
        </div>

        <div class="md-3">
            <label for="img_menu" class="text-white">Image du Menu</label>
            <input type="file" class="form-control" id="imageGite" name="img_menu" placeholder="" required>
        </div>


        <div class="mb-3">
            <label for="categorie_id" class="text-white">Choisir la catégorie du Menu</label>
            <select name="categorie_id" class="form-control">
                <?php
                afficherToutesCategories();
                ?>
            </select>
        </div>

        <div class="container text-center mt-5">
            <div class="btn-group " role="group" aria-label="Basic example">
                <button name="btn_ajouter_menu" class="a-anime m-2 ">Ajouter un Menu</button>
                <a  href="accueil" class=" a-anime   m-2  ">Annuler</a>

            </div>
        </div>

    </form>

</div>