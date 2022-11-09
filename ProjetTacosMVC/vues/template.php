<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Tacos Lyonnais</title>
    <link rel="shortcut icon" type="image/ico" href="assets/img/logoBlanc.jpeg">

</head>
<body>
    <header>
        <?php
        require_once "../vues/menu.php";
        ?>
    </header>
    <!--le $contenues stock le contenu d'une page, il varie selons la page appelé-->

    <div class="container">
        <?= $content ?>
    </div>


    <footer class="container-fluid">
        <?php
        require_once "footer.php";
        ?>
    </footer>

    <script src="assets/js/anim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>


</html>