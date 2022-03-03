<?php

namespace App\Controller;


class FrontController
{


    public function home(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Accueil";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/home.php';
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $style_header = ROOT_URL . "/CSS/style_header_index.css";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function register()
    {
        $mainTemplate = ROOT_PROJECT . '/app/HTML/loginCapchat/register/register.php';
        $title = "Dendo Jitesha : Inscription";
        $style_header = ROOT_URL . "/CSS/style_header.css";

        $header = ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';

    }

    public function carousel_velo(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/carousel_velo.php';
        $style_header = ROOT_URL . "/CSS/style_header_index.css";
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function contact(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/contact.php';
        $style_header = ROOT_URL . "/CSS/style_header_index.css";
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function equipement(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/equipement.php';
        $style_header = ROOT_URL . "/CSS/style_header_index.css";
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function lien(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/lien.php';
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function produit(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/produit.php';
        $style_header = ROOT_URL . "/CSS/style_header_index.css";
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function support(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/support.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


}