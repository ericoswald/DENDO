<?php
require 'lien_panier.php';

if(isset($_GET['id'])){
    $article = $DB->query('SELECT id FROM article WHERE id=:id', array('id' => $_GET['id']));
    if(empty($article)){
        echo "Le panier n'est pas bon";
    }else{
        $panier->add($article[0]->id);

        header('Location: /public/panier');
        exit();
    }
}else{
    echo "Vous n'avez pas sélectionné de produit à ajouter au panier";
}

