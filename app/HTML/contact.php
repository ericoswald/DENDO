<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>


    <!-- -------- -->
    <title>Dendo Jitesha</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../public/assets/image/Main.png">
    <link rel="stylesheet" href="/DENDO/public/CSS/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="../../public/CSS/style_header.css" type="text/css" media="all">

</head>

<body class="dark-mode">


<main>

    <div class="contact_background_linear">
        <div class="contact_titre">CONTACT</div>
    </div>

    <div class="contact_conteneur">
        <div id="map"></div>


        <form class="form_contact" action="#" method="POST">



            <div class="contact_form">
                <div class="contact_form_titre">CONTACTEZ-NOUS</div>

                <input class="contact_espace_form" type="text" name="Votre nom" value="" placeholder="Votre nom"
                       required>


                <input class="contact_espace_form" type="text" name="Votre prenom" value="" placeholder="Votre prenom"
                       required>


                <input class="contact_espace_form" type="email" name="Email" value="" placeholder="Email" required>


                <textarea id="contact_message" name="message" placeholder="Message" required></textarea>


                <input class="contact_bouton_envoyer" type="submit" value="Envoyer">


            </div>


        </form>

    </div>


</main>


<script src="/DENDO/public/JS/toggle_dark.js"></script>


<script src="/DENDO/public/JS/leaflet.js"></script>

</body>