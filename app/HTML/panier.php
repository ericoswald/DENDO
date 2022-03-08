<?php
require 'lien_panier.php';

?>

<div class="block_panier">
    <div class="block_panier_mid">
        <h1> Panier</h1>
        <br>
        <div class="tableau1">
            <div class="nom_produit">Produit</div>
            <div class="quantité_produit">Quantité</div>
            <div class="prix_produit">Prix</div>
            <div class="prix_tva">Prix avec TVA</div>
            <div class="delete">Supprimer</div>
        </div>
        <div>
            <?php
            $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $article = array();
            }else{
                $article = $DB->query('SELECT a.*, i.image FROM article a inner join image i ON a.id = i.id WHERE a.id IN  ('.implode(',',$ids).')');
            }
            foreach($article as $product):
                ?>
                <div class="tableau1">

                    <span class="nom_produit"><a class="img_panier"> <img src="/public/<?= $product->image; ?>"></a><span><?= $product->nom; ?></span></span>
                    <span class="quantité_produit"><input type="number" name="panier[quantité][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></span>
                    <span class="prix_produit"><?= number_format($product->prix * $_SESSION['panier'][$product->id],2,',',' ') ; ?> €</span>
                    <span class="prix_tva"><?= number_format($product->prix * 1.196 * $_SESSION['panier'][$product->id],2,',',' '); ?> €</span>
                    <span class="delete">
					<a href="panier?delPanier=<?= $product->id; ?>" class="del"><img src="../../public/assets/image/del.png "></a>
				</span>
                </div>
            <?php endforeach; ?>
            <div>
                Prix Total : <span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </span>
                <a href="/app/HTML/ajout_panier.php?id=<?= $product->id; ?>">Commander</a>
            </div>
        </div>
    </div>
</div>
