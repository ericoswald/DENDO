<?php
require 'lien_panier.php';

unset($_SESSION['aproduit'])
?>


<!-- CAROUSEL -->
<main>
    <div class="brackground_linear_gradient">
        <div class="titre_carousel">Nos Vélos
        </div>

    </div>

    <div class="carousel_conteneur1"></div>


    <div class="carousel_conteneur2">

        <div class="carousel_conteneur_option">
            <button type="button" class="carousel_menu" id="slide1">TOUT</button>
            <button type="button" class="carousel_menu" id="slide2">VTT</button>
            <button type="button" class="carousel_menu" id="slide3">ROUTE</button>
            <button type="button" class="carousel_menu" id="slide4">URBAIN</button>
        </div>


        <!-- tout -->
        <ul class="carousel_conteneur3">


            <div id="vtt">

                <?php $products = $DB->query('SELECT a.*, ca.libelle, i.image FROM article a inner join categorie_has_article cha ON a.id = cha.Article_id inner join categorie ca ON cha.Categorie_id = ca.id inner join image i on a.id = i.id where ca.libelle = "Vtt"');
                foreach ( $products as $product ):
                ?>


                <li class="carousel_block">
                    <a href="">
                        <img class="carousel_image" src="/public/<?= $product->image; ?>" alt="velo1"></a>
                    <h2 class="carousel_titre"><?= $product->nom; ?></h2>
                    <div class="carousel_categorie_velo"><?= $product->libelle; ?></div>
                    <div class="carousel_prix"><?= $product->prix; ?>€</div>
                    <div class="carousel_prix"><?= $product->id; ?></div>
                    <div class="carousel_centre_bouton">

                        <a href="/app/HTML/redirection_produit.php?id=<?= $product->id; ?>">
                            <span class="carousel_button">EN SAVOIR PLUS</span>
                        </a>
                    </div>
                </li>
                <?php endforeach ?>
            </div>

            <div id="route">

                <?php $products = $DB->query('SELECT a.*, ca.libelle, i.image FROM article a inner join categorie_has_article cha ON a.id = cha.Article_id inner join categorie ca ON cha.Categorie_id = ca.id inner join image i on a.id = i.id where ca.libelle = "Route"'); ?>
                <?php foreach ($products as $product): ?>
                <li class="carousel_block">
                    <a href="">
                        <img class="carousel_image" src="/public/<?= $product->image; ?>" alt="velo1"></a>
                    <h2 class="carousel_titre"><?= $product->nom; ?></h2>
                    <div class="carousel_categorie_velo"><?= $product->libelle; ?></div>
                    <div class="carousel_prix"><?= $product->prix; ?>€</div>
                    <div class="carousel_centre_bouton">
                        <a href="/app/HTML/ajouter_produit.php?id=<?= $product->id; ?>">
                            <span class="carousel_button">EN SAVOIR PLUS</span>
                        </a>
                    </div>
                </li>
                <?php endforeach ?>
            </div>


            <div id="ville">

                <?php $products = $DB->query('SELECT a.*, ca.libelle, i.image FROM article a inner join categorie_has_article cha ON a.id = cha.Article_id inner join categorie ca ON cha.Categorie_id = ca.id inner join image i on a.id = i.id where ca.libelle = "Ville" '); ?>
                <?php foreach ($products as $product): ?>
                <li class="carousel_block">
                    <a href="">
                        <img class="carousel_image" src="/public/<?= $product->image; ?>" alt="velo1"></a>
                    <h2 class="carousel_titre"><?= $product->nom; ?></h2>
                    <div class="carousel_categorie_velo"><?= $product->libelle; ?></div>
                    <div class="carousel_prix"><?= $product->prix; ?>€</div>
                    <div class="carousel_centre_bouton">
                        <a href="/app/HTML/ajouter_produit.php?id=<?= $product->id; ?>">
                            <span class="carousel_button">EN SAVOIR PLUS</span>
                        </a>
                    </div>
                </li>
                <?php endforeach ?>
            </div>


            <!---->
            <!--            <li class="carousel_block vtt" id="vtt2">-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">VTT</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!--            <li class="carousel_block vtt" id="vtt3">-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">VTT</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!--            <li class="carousel_block" id="vtt4">-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">VTT</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!--            <li class="carousel_block" id="vtt5">-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">VTT</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!---->
            <!--            <li class="carousel_block route" id="route">-->
            <!---->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">ROUTE</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </li>-->
            <!---->
            <!---->
            <!---->
            <!--            <li class="carousel_block route" id="route2" >-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">ROUTE</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!--            <li class="carousel_block" id="route3" >-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">ROUTE</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!--            <li class="carousel_block" id="route4">-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">ROUTE</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!--            <li class="carousel_block" id="route5" >-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">ROUTE</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!--            <li class="carousel_block" id="ville" >-->
            <!---->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">URBAIN</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </li>-->
            <!---->
            <!---->
            <!---->
            <!--            <li class="carousel_block" id="ville2" >-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">URBAIN</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!--            <li class="carousel_block" id="ville3" >-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">URBAIN</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
            <!--            <li class="carousel_block" id="ville4" >-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">URBAIN</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!--            <li class="carousel_block" id="ville5" >-->
            <!--                <a href="">-->
            <!--                    <img class="carousel_image" src="/public/assets/image/Lapierre_spicy.jpg" alt="velo1"></a>-->
            <!--                <h2 class="carousel_titre">Lapierre Spicy</h2>-->
            <!--                <div class="carousel_categorie_velo">URBAIN</div>-->
            <!--                <div class="carousel_prix">1499€</div>-->
            <!--                <div class="carousel_centre_bouton">-->
            <!--                    <a href="#">-->
            <!--                        <span class="carousel_button">EN SAVOIR PLUS</span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
            <!---->
            <!---->
        </ul>


        <!-- VTT -->


    </div>
</main>

