<?php
//
//use App\Database;

require 'Database.php';


//var_dump( ROOT_PROJECT."\app\Database.php");
require 'panier.class.php';
require 'aproduit.class.php';
$DB = new DB();
$panier = new panier($DB);
$aproduit = new aproduit($DB);