<?php
require 'C:\wamp64\www\carousel\DENDO\app\Database.php';
require 'panier.class.php';
require 'aproduit.class.php';
$DB = new Database();
$panier = new panier($DB);
$aproduit = new aproduit($DB);