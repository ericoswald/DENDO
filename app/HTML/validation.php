<?php
    $bdd = new PDO('mysql:host=localhost;dbname=dendo;','root','');

if(isset($_POST['article_titre'], $_POST['article_contenu'])){
if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])){
$article_titre = htmlspecialchars($_POST['article_titre']);
$article_contenu =htmlspecialchars($_POST['article_contenu']);
$ins->execute(array($article_titre, $article_contenu));
$message = 'Votre articla a bien été pris en compte';

}else{
$message ='Veuillez remplir tous les champs';
}
}
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <style>
        .titre_validation{
            padding-top: 10%;
            text-decoration: underline;
        }

        .vertical {
            border-left: 4px solid black;
            height: 400px;
            display: inline-block;
            position: relative;
            left : 900px;
            justify-content: right;
        }

        .couleur_validation{
            background-color: lightgray;
        }



    </style>
</head>
<body>
<div class="couleur_validation"</div>
<h1 class="titre_validation">Vos commandes  : </h1>
<hr width="100%">
<form method="POST">
    <input type="text"  name="article_titre" placeholder="titre" /><BR>
    <textarea name="article_contenu" placeholder="Contenu de l'aricle"></textarea><BR>
    <input type="submit" value="Envoyez l'article" />
</form>
<div class ="vertical">
    <h2>Livraison</h2><BR>
    <Span><?= $product->id; ?> </Span>

    <a href ="Livraison.html">Enregistrement de mes données</a>
</div>


</body>
<?php if (isset($message)) {echo $message; } ?>
</html>
