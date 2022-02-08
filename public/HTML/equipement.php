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
    <!-- -------- -->
    <title>Dendo Jitesha</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/Main.png">
    <link rel="stylesheet" href="../CSS/main.css" type="text/css" media="all">

</head>

<body class="dark-mode">
<header> <?php include('header_index.php'); ?>
</header>

<!-- CAROUSEL -->
<main>
    <form action="" method="POST" class="form_produit_acheter">

        <div class="equipement_img"></div>
        <h2 class="equipement_titre">EQUIPEMENT</h2>


        <div class="equipement_conteneur1">
            <div class="equipement_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum
            </div>

            <h3 class="equipement_titre_choix">Choisissez votre genre</h3>
            <div class="equipement_selection_genre">
                <input type="radio" name="genre" class=" demo3 equipement_conteneur_equip" id="genre1" checked>
                <label for="genre1">FEMME</label>
                <input type="radio" name="genre" class=" demo3 equipement_conteneur_equip2" id="genre2" checked>
                <label for="genre2" class="produit_roue_2">HOMME</label>
            </div>

            <h3 class="equipement_titre_choix">Choisissez votre style</h3>
            <div class="equipement_selection_genre">
                <input type="radio" name="style" class=" demo3 equipement_conteneur_equip" id="style1" checked>
                <label for="style1">PERFORMANCE</label>
                <input type="radio" name="style" class=" demo3 equipement_conteneur_equip2" id="style2" checked>
                <label for="style2" class="produit_roue_2">CASUAL</label>
            </div>


            <h3 class="equipement_titre_choix">Choisissez votre EQUIPEMENT</h3>

            <div class="equipement_chercher">
                <input type="hidden">
                <input class="equipement_bouton_chercher" type="submit" value="CASQUE">
            </div>


        </div>


    </form>


</main>

<footer><?php include('footer.php'); ?></footer>


<script src="../JS/toggle_produit.js"></script>

</body>

</html>