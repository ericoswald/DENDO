<?php
require 'lien_panier.php';

if(isset($_GET['id'])){
    $produit = $DB->query('SELECT id FROM article WHERE id=:id', array('id' => $_GET['id']));
    if(empty($produit)){
        echo "Ce produit n'existe pas";
    }else{
        $aproduit->add($produit[0]->id);

        header('Location: /public/produit');
        exit();
 
      
    }
}else{
    echo "Vous n'avez pas sélectionné de produit";
}

