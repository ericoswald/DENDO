<style>
    .test {
        margin: 80px 30px;
    }
</style>
<div class="test"><?php

    use App\Database;
    $bdd = new Database('dendo');

//    $req = $bdd->query('SELECT * FROM gamme ', 'App\Table\Gamme');
//    //var_dump($req);
//    //var_dump($req[0]);
//    foreach ($req as $post) {
//        echo $post->getName();
//    }

    $post = $bdd->prepare('SELECT * FROM gamme WHERE idGamme = ?', [$_GET['id']],'App\Table\Gamme','true');
    echo $post->nom;

    ?> </div>
