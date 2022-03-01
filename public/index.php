<?php
require '../app/Autoloader.php';
require 'vendor/autoload.php';

\App\Autoloader::register();

include('./../setEnv.php');

if (isset($_GET['p'])) {
    $p = htmlspecialchars($_GET['p']);
} else {
    $p = 'home';
}



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






