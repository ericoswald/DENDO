<?php
session_start();

try {
    $bd = new PDO('mysql:host=localhost;dbname=dendov2;', 'root', '');
} catch (Exception $e) {
    die("Erreur :" . $e->getMessage());
}
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    $query = 'SELECT pseudo,email,password FROM utilisateur WHERE email = ?';
    $check = $bd->prepare($query);
    $check->execute(array($email));

    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {



            if (password_verify($password, $data['password'])) {

                $_SESSION['user'] = $data['pseudo'];
                header('Location:home');
                die();

            } else header('Location:login?login_err=password');
        } else header('Location:login?login_err=email');
    } else header('Location:login?login_err=already');


}else header('Location:login');