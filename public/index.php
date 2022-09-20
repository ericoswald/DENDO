<?php
require '../app/Autoloader.php';
//require 'vendor/autoload.php';

\App\Autoloader::register();

include('./../setEnv.php');


$tabPage = ["home", "register", "carousel_velo", "contact", "equipement", "lien", "produit", "support", "faq","l404",
    "Livraison", "validation", "barre_recherche", "deconnexion", "login", "panier", "recap_commande", "connexion", "inscriptionTraitement"];

if (isset($_GET['p'])) {
    $pageExiste = false;
    foreach ($tabPage as $page) {
        if ($page == $_GET['p']) {
            $pageExiste = true;
        }
    }

    if ($pageExiste) {
        $p = htmlspecialchars($_GET['p']);
    } else {
        $p ='l404';
        header('Location:l404');
    }

} else {
    $p = 'home';
}

<<<<<<< HEAD
=======

>>>>>>> ab7f9da6e323503e90cca408d4829e2835574c45
$frontController = new \App\Controller\FrontController();
if (method_exists($frontController, $p)) {
    $content = $frontController->$p();
    echo $content;
    exit;
}






