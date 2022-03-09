<?php

require 'Database.php';
require 'panier.class.php';
require 'aproduit.class.php';
$DB = new DB();
$panier = new panier($DB);
$aproduit = new aproduit($DB);
//$abdd = new abdd($DB);