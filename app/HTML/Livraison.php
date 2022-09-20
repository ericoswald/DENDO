<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=dendo", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erreur de la connexion : " . $e->getMessage();
    die();
}
if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adresse']) && !empty($_POST['adresse_facturation']) && !empty($_POST['codePostal']) && !empty($_POST['libelle']) && !empty($_POST['pays']) && !empty($_POST['ville'])) {

    $insertion = $db->prepare("INSERT INTO `client` (`email`, `nom`, `telephone`) VALUES (:email, :nom, :telephone);");
    $insertion = $db->prepare("INSERT INTO `livraison` (`adresse`, `adresse_facturation`, `codePostal`, `libelle`, `pays`,`ville`) VALUES (`adresse`, `adresse_facturation`, `codePostal`, `libelle`, `pays`,`ville`);");
    $insertion->bindValue(':nom', $_POST['nom']);
    $insertion->bindValue(':email', $_POST['email']);
    $insertion->bindValue(':telephone', $_POST['telephone']);
    $insertion->bindValue(':adresse', $_POST['adresse']);
    $insertion->bindValue(':adresse_facturation', $_POST['adresse_facturation']);
    $insertion->bindValue(':codePostal', $_POST['codePostal']);
    $insertion->bindValue(':libelle', $_POST['libelle']);
    $insertion->bindValue(':pays', $_POST['pays']);
    $insertion->bindValue(':ville', $_POST['ville']);
    $verification = $insertion->execute();

    if ($verification) {
        echo "Validation du formulaire";
    } else {
        echo "Echec de l'insertion";
    }
}
if (empty($insertion)) {
    echo 'Les champs avec des étoiles sont à remplir pour la validation ';
}
?>


<main>

    <div id="couleur_livraison"></div>
    <div id="bloc1">
        <form class="form_livraison" action="recap_commande" method="POST">
            <h1>Formulaire de Livraison</h1>

            <label class="label_livraison" for="nom"></label>
            <input class="input_livraison" type="text" required="required" placeholder="Veuillez saisir votre nom"
                   name="nom">

            <label class="label_livraison" for="prenom"></label>
            <input class="input_livraison" type="text" required="required" placeholder="Veuillez saisir votre prénom"
                   name="prenom">

            <label class="label_livraison" for="email"></label>
            <input class="input_livraison" type="email" required="required" placeholder="Veuillez saisir votre email"
                   name="email">

            <label class="label_livraison" for="adresse"></label>

            <input class="input_livraison" type="text" required="required" placeholder="Veuillez saisir votre adresse"
                   name="adresse">


            <label class="libelle" for="libelle"></label>
            <input class="input_livraison" type="text" required="required" placeholder="Veuillez saisir votre Libelle"
                   name="libelle">

            <label class="label_livraison" for="adresse_complementaire"></label>
            <input class="input_livraison" type="text" required="required"
                   placeholder="Veuillez saisir votre adresse complémentaire" name="adresse_complementaire">

            <label class="label_livraison" for="ville"></label>
            <input class="input_livraison" type="text" required="required" placeholder="Veuillez saisir votre ville"
                   name="ville">

            <label class="label_livraison" for="pays"></label>
            <input class="input_livraison" type="text" required="required" placeholder="Veuillez saisir votre pays"
                   name="pays">

            <label class="label_livraison" for="adresse_facturation"></label>
            <input class="input_livraison" type="text" required="required"
                   placeholder="Veuillez saisir votre adresse de facturation" name="adresse_facturation">

            <label class="label_livraison" for="codePostal"></label>
            <input class="input_livraison" type="text" required="required"
                   placeholder="Veuillez saisir votre code postal" name="codePostal">


            <input class="input_bouton" type="submit" id='submit' value='Envoyer Information'>


        </form>
    </div>

</main>