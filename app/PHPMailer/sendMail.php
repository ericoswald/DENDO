<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($POST['email']) && isset($POST['nom']) && isset($POST['prenom']) && isset($POST['message'])){
    $nom = $POST['nom'];
    $prenom = $POST['prenom'];
    $message = $POST['message'];
    $email = $POST['email'];
    $subject = "New message : " . $nom . " ". $prenom;


    require_once "PHPMailer.php";
    require_once "SMTP.php";
    require_once "Exception.php";

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '5d94a13eb744a6';
    $phpmailer->Password = 'eb4c2ddcac377c';


    $phpmailer->isHTML(true);
    $phpmailer->setFrom($email, $nom . " ". $prenom);
    $phpmailer->addAddress('eric68520@gmail.com');
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $message;


    if($email->send ()){
        $status = "success";
        $response = "Email envoyer !";
    }
    else {
        $status = "failed";
        $response = "Erreur: <br>" . $email->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));




}
