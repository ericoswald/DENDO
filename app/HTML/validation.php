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
        h1{
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

        body{
            background-color: lightgray;
        }

        .bouton{
            background-color: #F9FFA9;
            border-radius: 0% 0% 10% 10%;
        }
        .titre{
            font-family: Helvetica, sans-serif;
        }



    </style>
</head>
<body>

<h1 class="titre">Vos commandes  : </h1>
<hr width="100%">
<form method="POST">
    <input type="text"  name="article_titre" placeholder="titre" /><BR>
    <textarea name="article_contenu" placeholder="Contenu de l'aricle"></textarea><BR>
    <input type="submit" value="Envoyez l'article" />
</form>
<div class ="vertical">
    <h2>Livraison</h2><BR>
    <Span>Mes coordonées de livraison : </Span><BR><BR>
    <span>Je souheterai renseinger mes coordonées</span><BR><BR><BR>
    <a href ="Livraison.html">Enregistrement de mes données</a>
</div>


</body>
<?php if (isset($message)) {echo $message; } ?>
</html>
