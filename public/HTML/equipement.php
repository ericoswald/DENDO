<head>
    <link rel="stylesheet" href="../CSS/main.css" type="text/css" media="all">
</head>

<body class="dark-mode">
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



<script src="../JS/toggle_produit.js"></script>

</body>

</html>