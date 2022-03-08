<?php
require 'lien_panier.php';

if(isset($_GET['id'])){
    $article = $DB->query('SELECT id FROM article WHERE id=:id', array('id' => $_GET['id']));
    if(empty($article)){
        echo "Ce produit n'existe pas";
    }else{
        $panier->add($article[0]->id);

        header('Location: /public/carousel_velo');
        exit();
    }
}else{
    echo "Vous n'avez pas sélectionné de produit à ajouter au panier";
}

