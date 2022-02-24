<!DOCTYPE html>
<html lang="en">

<head>
    <!-- TODO: la balise HEAD est la même dans tous ces fichiers PHP ? Pourquoi ne pas inclure un fichier head.php pour factoriser le tout ?
    pour les choses variables, utiliser des variables php (ex. $title)
    -->
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
    <link rel="stylesheet" href="/DENDO/public/CSS/main.css" type="text/css" media="all">

</head>

<body class="dark-mode">


<!-- CAROUSEL -->
<main>
    <form action="" method="POST" class="form_produit_acheter">


        <div class="brackground_linear_gradient">
            <div class="titre_produit">CLAYMORE
                <br><span class="titre_produit2">DOWNHILL</span>
            </div>

        </div>

        <div class="produit_conteneur1">

            <div class="produit_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum

            </div>

            <div class="produit_taille_roue">Choisissez votre taille de roue</div>


            <div class="produit_selection_taille">
                <input type="radio" name="taille_roue" class=" demo2 produit_conteneur_roue" id="taille_roue1" checked>
                <label for="taille_roue1">27.5''</label>
                <input type="radio" name="taille_roue" class=" demo2 produit_conteneur_roue2" id="taille_roue2" checked>
                <label for="taille_roue2" class="produit_roue_2">29''</label>
            </div>

            <div class="produit_velo"><img class="produit_taille_velo" src="/DENDO/public/assets/image/velo1.png" alt="velo"/>
            </div>

            <div class="produit_acheter">
                <input type="hidden">
                <input class="produit_bouton_acheter" type="submit" value="Acheter">
                <div class="produit_prix">1122€</div>
            </div>
        </div>

        <div class="produit_background">
            <h2 class="produit_techno">TECHNOLOGIE + SPECIFICATION</h2>


            <div class="produit_conteneur_option">
                <button type="button" class="produit_espace_option" id="togg1">CADRE</button>
                <button type="button" class="produit_espace_option" id="togg2">TAILLE & GEOMETRIE</button>
                <button type="button" class="produit_espace_option" id="togg3">SPECIFICATION</button>
            </div>

            <div id="produit_d1">
                <div ><span class="produit_menu" id="togg4">PROTECION</span></div>
                <div><span  class="produit_menu" id="togg5">ROULEMENTS</span></div>
                <div><span class="produit_menu" id="togg6">TUBE DE DIRECTION</span></div>
                <div ><span class="produit_menu" id="togg7">PROTECTION DE CHAINE</span></div>
                <div><span  class="produit_menu" id="togg8">CABLAGE</span></div>
            </div>

            <div class="conteneur_produit_cadre">
                <div id="produit_d4">
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    </div>
                </div>

            </div>


            <div class="conteneur_produit_cadre">
                <div id="produit_d5">
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.

                    </div>
                </div>

            </div>

            <div class="conteneur_produit_cadre">
                <div id="produit_d6">
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    </div>
                </div>

            </div>

            <div class="conteneur_produit_cadre">
                <div id="produit_d7">
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    </div>
                </div>

            </div>

            <div class="conteneur_produit_cadre">
                <div id="produit_d8">
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    </div>
                </div>

            </div>


            <div id="produit_d2">
                <p>Il existe deux façons de cacher un élément <span>comme un div</span> en CSS :</p>
                <ul>
                    <li>Utiliser visibility: hidden</li>
                    <li>Utiliser display: none</li>
                </ul>
            </div>


            <div class="conteneur_produit_specification">
                <div id="produit_d3">
                    <img class="produit_logo_velo" src="/DENDO/public/assets/image/logo_velo.png" alt="velo">

                    <div class="produit_specification_cadre">
                        <div>TAILLE DE CADRE</div>
                        <div>COULEUR</div>
                    </div>
                    <div class="produit_taille_de_cadre">
                        <div>S,M,L,XL,XXL</div>
                        <div>Rouge et blanc</div>
                    </div>
                </div>

            </div>


        </div>

    </form>


</main>




<script src="/DENDO/public/JS/toggle_produit.js"></script>

</body>

</html>