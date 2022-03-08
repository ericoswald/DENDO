<?php
require 'lien_panier.php';
?>

<?php
                $ids = array_keys($_SESSION['aproduit']);
                if(empty($ids)){
                    $products = array();
                }else{
                    $products = $DB->query('SELECT * FROM article WHERE id IN ('.implode(',',$ids).')');
                }
                foreach($products as $product):
                    ?>
                    <main>
    <form action="" method="POST" class="form_produit_acheter">


        <div class="brackground_linear_gradient">
        <span class="titre_produit"><?= $product->nom; ?></span>
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
                <label for="taille_roue1">S</label>
                <input type="radio" name="taille_roue" class=" demo2 produit_conteneur_roue2" id="taille_roue2" checked>
                <label for="taille_roue2" class="produit_roue_2">M</label>
                <input type="radio" name="taille_roue" class=" demo2 produit_conteneur_roue3" id="taille_roue3" checked>
                <label for="taille_roue3" class="produit_roue_2">L</label>
            </div>

            <div class="produit_velo"><img class="produit_taille_velo" src="/public/assets/image/velo1.png" alt="velo"/>
            </div>

            <div class="produit_acheter">
                <input type="hidden">
             <a href="/app/HTML/ajout_panier.php?id=<?= $product->id; ?>" class="produit_bouton_acheter">
                 Acheter</a>
                <div class="produit_prix"><?= $product->prix; ?>€</div>
            </div>
        </div>

        <div class="produit_background">
            <h2 class="produit_techno">TECHNOLOGIE + SPECIFICATION</h2>


            <div class="produit_conteneur_option">
                <button type="button" class="produit_espace_option" id="togg1">INFORMATION</button>
                <button type="button" class="produit_espace_option" id="togg2">TAILLE & GEOMETRIE</button>
                <button type="button" class="produit_espace_option" id="togg3">SPECIFICATION</button>
            </div>

            <div id="produit_d1">
                <div ><span class="produit_menu" id="togg4">FREINS</span></div>
                <div><span  class="produit_menu" id="togg5">SUSPENSION</span></div>
                <div><span class="produit_menu" id="togg6">CADRE</span></div>
                <div ><span class="produit_menu" id="togg7">POIDS</span></div>
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
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                </div>

            </div>


            <div class="conteneur_produit_specification">
                <div id="produit_d3">
                    <img class="produit_logo_velo" src="/public/assets/image/logo_velo.png" alt="velo">

                    <div class="produit_specification_cadre">
                        <div>TAILLE DE CADRE</div>
                        <div>COULEUR</div>
                    </div>
                    <div class="produit_taille_de_cadre">
                        <div>S,M,L</div>
                        <div>Rouge et blanc</div>
                    </div>
                </div>

            </div>


        </div>

    </form>


</main>

                <?php endforeach; ?>


