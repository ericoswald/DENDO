<?php
//
//use App\Database;
require 'C:\wamp64\www\dendo_fin\DENDO\app\Database.php';
//require ROOT_PROJECT.'\app\Database.php';
require 'panier.class.php';
require 'aproduit.class.php';
$DB = new DB();
$panier = new panier($DB);
$aproduit = new aproduit($DB);