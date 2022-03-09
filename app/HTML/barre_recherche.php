<?php
unset($_SESSION['aproduit']);

$bdd = new PDO('mysql:host=localhost;dbname=dendo;', 'root', '');
$allproduits = $bdd->query('SELECT * FROM article ORDER BY id  DESC');
if (isset($_GET['S']) and !empty($_GET['S'])) {
    $recherche = htmlspecialchars($_GET['S']);
    $allproduits = $bdd->query('SELECT * FROM article WHERE nom LIKE "%' . $recherche . '%" ORDER BY id DESC');


}
?>


<main>
    <div class="recherche">
        <form method="GET" class="recherche_form" >
            <input class="barre" type="search" name="S" placeholder="Recherche d'un produit" style="text-align: center"><BR><BR>
            <input class="bouton_recherche" type="submit" name="envoyer" placeholder="Envoyez">
        </form>
    </div>
    <section class="afficher_produit">
        <?php
        if ($allproduits->rowCount() > 0) {
            while ($produit = $allproduits->fetch()) {
                $id = $produit['id'];
                ?>
                <a class="recherche_produit" href="/app/HTML/redirection_produit.php?id=<?= $id ?>"><?= $produit['nom']; ?></a>
                <?php
            }
        } else {
            ?>
            <p>Aucun produit trouve</p>
            <?php
        }
        ?>
    </section>
</main>
