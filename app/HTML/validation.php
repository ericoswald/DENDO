<?php
require 'Livraison.php';
$bdd = new PDO('mysql:host=localhost;dbname=dendo;', 'root', '');

if (isset($_POST['article_titre'], $_POST['article_contenu'])) {
    if (!empty($_POST['article_titre']) and !empty($_POST['article_contenu'])) {
        $article_titre = htmlspecialchars($_POST['article_titre']);
        $article_contenu = htmlspecialchars($_POST['article_contenu']);
        $ins->execute(array($article_titre, $article_contenu));
        $message = 'Votre articla a bien été pris en compte';

    } else {
        $message = 'Veuillez remplir tous les champs';
    }
}
?>

<main>
<div class="couleur_validation"></div>
    <h1 class="titre_validation">Vos commandes : </h1>
    <hr width="100%">
    <form method="POST">
        <input type="text" name="article_titre" placeholder="titre"/><BR>
        <textarea name="article_contenu" placeholder="Contenu de l'aricle"></textarea><BR>
        <input type="submit" value="Envoyez l'article"/>
    </form>
    <div class="vertical">
        <h2>Livraison</h2><BR>
        <span><?= $product->id; ?></span>
        <span><?= $product->nom; ?></span>
        <span><?= $product->prix; ?></span>
        <a href="Livraison.php">Enregistrement de mes données</a>
    </div>

</main>

<?php if (isset($message)) {
    echo $message;
} ?>

