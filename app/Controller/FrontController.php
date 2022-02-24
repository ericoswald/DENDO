<?php
namespace App\Controller;


class FrontController {



    public function home(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Accueil";
        
        $mainTemplate = ROOT_PROJECT . '/app/HTML/home.php';

        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function register()
    {
        $title = "Dendo Jitesha : Inscription";
    }

    public function carousel_velo(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/carousel_velo.php';

        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function contact(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/contact.php';
        $header =  ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';



        return ob_get_clean();
    }


    public function equipement(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/equipement.php';

        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function lien(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/lien.php';

        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }




    public function produit(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/produit.php';

        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function support(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/support.php';

        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }










}