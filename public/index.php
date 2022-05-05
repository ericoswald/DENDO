<?php
require '../app/Autoloader.php';
//require 'vendor/autoload.php';

\App\Autoloader::register();

include('./../setEnv.php');

if (isset($_GET['p'])) {
    $p = htmlspecialchars($_GET['p']);
} else {
    $p = 'home';
}


$frontController = new \App\Controller\FrontController();
if (method_exists($frontController, $p)) {
    $content = $frontController->$p();
    echo $content;
    exit;
}






