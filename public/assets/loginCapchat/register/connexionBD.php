<?php

try {
    $bd = new PDO('mysql:host=localhost;dbname=dendo;', 'root', '');
} catch (Exception $e) {
    die("Erreur :" . $e->getMessage());
}