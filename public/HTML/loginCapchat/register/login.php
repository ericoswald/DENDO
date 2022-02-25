<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="../../../CSS/style_login.css" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Cabin&family=Roboto+Condensed:ital@1&display=swap"
          rel="stylesheet">

</head>

<body>


<div class="form_connexion">


    <div class="sousmenu">
        <div class="sousmenu_login select"><a href="./login.php">Connexion</a></div>
        <div class="sousmenu_register"><a href="register.php">Inscription</a></div>
    </div>

    <div class="login">
        <?php
        if(isset($_GET['login_err']))
        {
            $err = htmlspecialchars($_GET['login_err']);

            switch($err)
            {
                case 'password':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe incorrect
                    </div>
                    <?php
                    break;

                case 'email':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email incorrect
                    </div>
                    <?php
                    break;

                case 'already':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte non existant
                    </div>
                    <?php
                    break;
            }
        }
        ?>
        <form action="connexion.php" method="post">
            <div class="username user_pass">
                <span class="iconify" data-icon="codicon:account"></span>

                <input class="email" type="email" placeholder="Email" name="email" required>

            </div>
            <div class="password user_pass">
                <span class="iconify" data-icon="ic:baseline-password"></span>

                <input type="password" placeholder="Mot de passe" name="password" required>
            </div>
            <div class="login_button">
                <input type="submit" id='submit' value='Connexion'>
            </div>
        </form>
    </div>
</div>
</body>

</html>