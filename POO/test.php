<?php
include ('Database.php');
$bdd = new Database('dendo');
$resu = $bdd->query('SELECT * FROM gamme');
var_dump($resu);
