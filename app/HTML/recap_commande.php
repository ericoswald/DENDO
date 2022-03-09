<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/oauth2/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER => array(
        'Accept-Language: en_US',
        'Accept: application/json',
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic QVJkQjVfekhpa2NqN1AyZjEyRC1QUEgwWEZRdXZ3UHI0OFlodzhkdVBaSlM2ZHpzWkxmUW05OUdodHp4a1ZZdUZ6UzN4SjBDSjA4d3d1Rlc6RUxTWVFRUkotVjlncnN2UWo2WlRxcThLX1o3VnctTEd4ek9UVjNOQXNFSEF4WmtfZkNFOWUwZXhFTTZBZnZMLVpKY1RWYl9wc2wyUHowV2c='
    ),
));


$response = curl_exec($curl);
curl_close($curl);
$php = json_decode($response);
$token = $php->access_token;


if (isset($token)) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v2/checkout/orders',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_POSTFIELDS => '{
                    "intent": "CAPTURE",
                    "application_context": {
                        "return_url": "http://dendo.localhost.fr/paiement-verif/",
                        "cancel_url": "http://dendo.localhost.fr/paiement-verif/"
                    },
                    "purchase_units": [
                        {
                            "reference_id": "test",
                            "amount": {
                                "currency_code": "EUR",
                                "value": "80"
                            }
                        }
                    ]
                }',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    $convert = json_decode($response);
    $id = $convert->id;


    curl_close($curl);


    $url = $convert->links[1]->href;

    header($url);


}


?>

<main class="livraison_conteneur">

    <h1 class="commande">Récapitulatif de commande</h1>

    <div class="toute_info">
        <div>1</div>
        <div class="info">Vos informations:</div>

        <div class="commande_personne">
            <div class="nom marge">Nom: <?= $_POST["nom"] . '<br>' ?> </div>
            <div class="prenom marge">Prénom: <?= $_POST["prenom"] . '<br>' ?></div>
            <div class="prenom marge">Email: <?= $_POST["email"] . '<br>' ?></div>

        </div>
    </div>


    <div class="tout_lieu">
        <div>2</div>
        <div class="titre_lieu">Adresse de livraison:</div>

        <div class="lieu">
            <div class="adresse marge">Adresse: <?= $_POST["adresse"] . '<br>' ?> </div>
            <div class="adresse marge">Adresse de facturation: <?= $_POST["adresse_facturation"] . '<br>' ?> </div>
            <div class="code_postale marge">Code Potale: <?= $_POST["codePostal"] . '<br>' ?></div>
            <div class="ville">Ville: <?= $_POST["ville"] . '<br>' ?></div>
            <div class="ville">Libelle: <?= $_POST["libelle"] . '<br>' ?></div>
        </div>
    </div>


    <div class="toute_autres_info">
        <div>3</div>
        <div class="titre_autre_info">Autres informations:</div>

        <div class="autre_info">
            <div class="montant marge">Montant de la commande: €</div>
            <div class="montant marge">Nom du/des produits: €</div>
        </div>
    </div>


    <div class="conteneur_commander">
        <a href="https://www.sandbox.paypal.com/checkoutnow?token=<?= $id ?>">
            <input class="bouton_commander" type="submit" value="Commander"/>
        </a>
    </div>

</main>







