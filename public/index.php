<?php
require '../app/Autoloader.php';
\App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

//if ($p=== 'register'){
//    require '../public/assets/loginCapchat/register/register.php';
//}

if ($p === 'home') {
    require './HTML/home.php';
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

    $content = ob_get_clean();
    require '../public/HTML/template.php';
}

