<?php
require 'lien_panier.php';

?>

<div class="checkout">
    <div class="title">
        <div class="wrap">
            <h2 class="titre_panier">Panier</h2>
        </div>
    </div>
    <form method="post" action="panier.php">
        <div class="table">
            <div class="wrap">

                <div class="titre_ligne">
                    <span class="nom_produit">Produit</span>
                    <span class="quantité_produit">Quantité</span>
                    <span class="prix_produit">Prix</span>
                    <span class="prix_tva">Prix avec TVA</span>
                    <span class="delete">Supprimer</span>
                </div>

                <?php
                $ids = array_keys($_SESSION['panier']);
                if(empty($ids)){
                    $article = array();
                }else{
                    $article = $DB->query('SELECT * FROM article WHERE id IN ('.implode(',',$ids).')');
                }
                foreach($article as $product):
                    ?>
                    <div class="row">
                        <a href="#" class="img"> <img src="img/<?= $product->id; ?>.png" height="53"></a>
                        <span class="nom_produit"><?= $product->nom; ?></span>
                        <span class="quantité_produit"><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></span>
                        <span class="prix_produit"><?= number_format($product->prix * $_SESSION['panier'][$product->id],2,',',' ') ; ?> €</span>
                        <span class="prix_tva"><?= number_format($product->prix * 1.196 * $_SESSION['panier'][$product->id],2,',',' '); ?> €</span>
                        <span class="delete">
					<a href="panier.php?delPanier=<?= $product->id; ?>" class="del"><img src="img/del.png"></a>
				</span>
                    </div>
                <?php endforeach; ?>
                <div class="rowtotal">
                    Prix Total : <span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </span>
                    <input type="submit" value="Commander">
                </div>

            </div>
        </div>
    </form>
</div>
