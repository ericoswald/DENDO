<style>
    .test {
        margin: 80px 30px;
    }
</style>
<div class="test"><?php

    use App\App;
    use App\Table\Gamme;
    use App\Table\Table;


    //    $req = $bdd->query('SELECT * FROM gamme ', 'App\Table\Gamme');
    //    //var_dump($req);
    //    //var_dump($req[0]);
    //    foreach ($req as $post) {
    //        echo $post->getNom();
    //    }

    foreach (Gamme::getGamme() as $post) {
        echo $post->getNom() . PHP_EOL;
    }
    echo " <br>";
    $result = App::getDb()->prepare('SELECT * FROM gamme WHERE id = ?', [$_GET['id']], 'App\Table\Gamme', 'true');
    echo $result->nom;

    echo " <br>";

    echo Gamme::findById(3)->nom;

    foreach (Gamme::all() as $post) {
        echo $post->nom;
    }
    ?> </div>
