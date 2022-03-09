<?php
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
$token= $php->access_token;



if(isset($token)) {
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


<main>
<div class="couleur_validation"></div>
    <h1 class="titre_validation">Vos commandes : </h1>
    <hr width="100%">
    <form method="POST">
        <input type="text" name="article_titre" placeholder="titre"/><BR>
        <textarea name="article_contenu" placeholder="Contenu de l'aricle"></textarea><BR>

    </form>
        <a href="https://www.sandbox.paypal.com/checkoutnow?token=<?= $id ?>" ><input type="submit" value="Envoyez l'article"/></a>

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

