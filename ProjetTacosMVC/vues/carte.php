<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/styles.css" />
    <link
            rel="stylesheet"
            href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""
    />
    <title>Document</title>
</head>
<body>
<div class=" container wrapper">
    <div class="row g-0 contact">


        <div class="col-6 col-md-4 " >
            <h1 class="mb-5">Nous contacter</h1>
                <div class="contact-items mt-5">
                    <div class="contact-item mb-5">
                        <a  href="tel:00(213) 5 88 54 01 80" class="lienCarte">
                            <ion-icon name="call"></ion-icon>
                            00(213) 542 16 70 42
                        </a>
                    </div>
                    <div class="contact-item mb-5">
                        <a href="athman-640@hotmail.fr" >
                            <ion-icon name="mail"></ion-icon>
                            athman-640@hotmail.fr
                        </a>
                    </div>
                    <div class="contact-item mb-5">
                        <a href="www.tacoslyonnais.com" >
                            <ion-icon name="globe"></ion-icon>
                            www.tacoslyonnais.com
                        </a>
                    </div>
                    <div class="contact-item mb-5">
                        <a href="www.exemple.com">
                            <ion-icon name="location"></ion-icon>
                            Cartier Sghir-Béjaia
                        </a>
                    </div>
                </div>
        </div>
        <div class="col-sm-6 col-md-8">
            <div id="map"></div>
        </div>
    </div>

</div>
<script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
<script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
></script>
<script
        src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""
></script>
<script src="assets/anim.js"></script>
</body>
</html>