<?php
namespace App\Controller;

class FrontController {

    public function home(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Accueil";
        
        $mainTemplate = ROOT_PROJECT . '/public/HTML/home.php';

        require ROOT_PROJECT . '/public/HTML/template.php';


        return ob_get_clean();
    }

    public function register()
    {
        $title = "Dendo Jitesha : Inscription";
    }
}