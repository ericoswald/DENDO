<?php
require '../app/Autoloader.php';
\App\Autoloader::register();

include('./../setEnv.php');

//TODO ne pas utiliser directement les variables $_GET/$_POST (nettoyage  des données, validation si nécessaire)
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

//if ($p=== 'register'){
//    require '../public/assets/loginCapchat/register/register.php';
//}

//TODO
// 1. refactoriser pour éviter la succession de if. Deux possibilités :
// * Vérifier que le fichier existe dans le dossier HTML (nécessite de déplacer register.php)
// * maintenir un tableau de valeurs possibles de $p
// - Que ce passe-t-il si $p ne match aucun cas ?
// 2. Ne pas placer vos fichiers PHP dans HTML, mais dans app

$frontController = new \App\Controller\FrontController();
if (method_exists($frontController, $p)) {
    $content = $frontController->$p();
    echo $content;
    exit;
}




if ($p === 'home') {
    //$content = $frontController->home();
    if (method_exists($frontController, $p)) {
        $content = $frontController->$p();
    }
    

    echo $content;
    //require '../public/HTML/template.php';
    exit();
} else {
    ob_start();
    if ($p === 'lien') {
        require './HTML/lien.php';
    }
    if ($p === 'test') {
        require './HTML/test.php';
    }
    if ($p=== 'equipement'){
        require './HTML/equipement.php';
    }
    if ($p=== 'register'){
        require '../public/assets/loginCapchat/register/register.php';
    }
    if ($p === 'contact') {
        require './HTML/contayyyct.php';
    }
    if ($p === 'produit') {
        require './HTML/produit.php';
    }

    $content = ob_get_clean();
    require '../public/HTML/template.php';
}

