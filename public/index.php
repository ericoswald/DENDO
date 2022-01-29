<?php
require '../app/Autoloader.php';
\App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

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
    $content = ob_get_clean();
    require '../public/HTML/template.php';
}
