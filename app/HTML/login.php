<body>


<div class="form_connexion">


    <div class="sousmenu">
        <div class="sousmenu_login select"><a href="<?= ROOT_URL?>/login">Connexion</a></div>
        <div class="sousmenu_register"><a href="<?= ROOT_URL?>/register">Inscription</a></div>
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
        <form action="<?= ROOT_URL?>/../app/HTML/loginCaptcha/register/connexion.php" method="post">
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

