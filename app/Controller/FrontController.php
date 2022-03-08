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
        $logo = ROOT_URL . "/assets/image/Main.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function register()
    {
        $mainTemplate = ROOT_PROJECT . '/app/HTML/register.php';
        $title = "Dendo Jitesha : Inscription";
        $style_header = ROOT_URL . "/CSS/style_header_white.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';

    }

    public function carousel_velo(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Carousel Velo";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/carousel_velo.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function contact(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Contact";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/contact.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function equipement(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Equipement";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/equipement.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function lien(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Lien";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/lien.php';
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function produit(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Produit";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/produit.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function support(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Support";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/support.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }


    public function faq(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Faq";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/faq.php';
        $style_header = ROOT_URL . "/CSS/style_header_white.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function barre_recherche(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Barre de recheche";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/barre_recherche.php';
        $style_header = ROOT_URL . "/CSS/style_header_white.css";
        $header = ROOT_PROJECT . "/app/HTML/header_index.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function deconnexion(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Faq";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/deconnexion.php';
        $style_header = ROOT_URL . "/CSS/style_header.css";
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }

    public function login(): string
    {
        ob_start();

        //Definir les variables ici (ex. $title, $products, etc).
        $title = "Dendo Jitesha : Login";

        $mainTemplate = ROOT_PROJECT . '/app/HTML/login.php';
        $style_header = ROOT_URL . "/CSS/style_header_white.css";
        $header = ROOT_PROJECT . "/app/HTML/header.php";
        $logo = ROOT_URL . "/assets/image/logo.png";
        require ROOT_PROJECT . '/app/HTML/template.php';


        return ob_get_clean();
    }




    public function inscriptionTraitement()
    {

        require(ROOT_PROJECT. '/app/HTML/loginCapchat/register/captcha/autoload.php');
        $secret = '6LeGbYcdAAAAADGRsng3vQiY5L57xBXuXhjjdUHu';
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);

        function verifMotDePasse(string $mdp)
    {
        if (strlen($mdp) >= 8) {
            $minCarac = false;
            $majCarac = false;
            $specialCarac = false;
            $special = ["!", "*", "#", "$", "&"];

            for ($i = 0; $i < strlen($mdp); $i++) {
                if (ctype_lower($mdp[$i])) {
                    $minCarac = true;
                }
                if (ctype_upper($mdp[$i])) {
                    $majCarac = true;
                }
                foreach ($special as $caractere) {
                    if ($mdp[$i] == $caractere) {
                        $specialCarac = true;
                    }
                }
            }
        }
        return $minCarac && $majCarac && $specialCarac;
    }

        try {
            $bdd = new \PDO("mysql:host=localhost;dbname=dendov2;charset=utf8", "root", "");

        } catch (\PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }


        if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $password_retype = htmlspecialchars($_POST['password_retype']);

            $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateur WHERE email = ?');
            $check->execute(array($email));
            $data = $check->fetch();
            $row = $check->rowCount();

            $email = strtolower($email);
            if ($row == 0) {
                if (strlen($pseudo) <= 50) {
                    if (strlen($email) <= 50) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            if ($password === $password_retype) {
                                if (verifMotDePasse($password)) {
                                    $cost = ['cost' => 12];
                                    $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                                    $ip = $_SERVER['REMOTE_ADDR'];
                                    if (isset($_POST['g-recaptcha-response'])) {
                                        $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
                                        if ($resp->isSuccess()) {

                                            $insert = $bdd->prepare('INSERT INTO utilisateur(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip)');
                                            $insert->execute(array(
                                                'pseudo' => $pseudo,
                                                'email' => $email,
                                                'password' => $password,
                                                'ip' => $ip
                                            ));
                                            header('Location:register?reg_err=success');
                                            die();
                                        } else {
                                            header('Location: register?reg_err=capchat');
                                            die();
                                        }

                                    } else {
                                        header('Location: register?reg_err=capchat');
                                        die();
                                    }


                                } else {
                                    header('Location: register?reg_err=password_condition');
                                    die();
                                }
                            } else {
                                header('Location: register?reg_err=password');
                                die();
                            }
                        } else {
                            header('Location: register?reg_err=email');
                            die();
                        }
                    } else {
                        header('Location: register?reg_err=email_length');
                        die();
                    }
                } else {
                    header('Location: register?reg_err=pseudo_length');
                    die();
                }
            } else {
                header('Location: register?reg_err=already');
                die();
            }
        }

    }


}