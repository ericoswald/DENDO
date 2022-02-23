<head>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>


<div class="register_background">
    <div class="form_inscription">


        <div class="sousmenu">
            <div class="sousmenu_login "><a href="./login.php">Connexion</a></div>
            <div class="sousmenu_register select"><a href="register.php">Inscription</a></div>
        </div>

        <div class="login">

            <form action="./inscription_verif.php" method="post">
                <div class="pseudo user_pass">
                    <span class="iconify" data-icon="codicon:account"></span>

                    <input type="text" placeholder="Pseudo" name="pseudo" required>

                </div>
                <div class="username user_pass">
                    <span class="iconify" data-icon="ci:mail"></span>

                    <input class="email" type="email" placeholder="Email" name="email" required>

                </div>

                <div class="password user_pass">
                    <span class="iconify" data-icon="ic:baseline-password"></span>

                    <input type="password" placeholder="Mot de passe" name="password" required>
                </div>
                <div class="password_retype user_pass">
                    <span class="iconify" data-icon="ic:baseline-password"></span>

                    <input type="password" placeholder="Mot de passe" name="password_retype" required>
                </div>
                <div class="captcha">

                    <div class="g-recaptcha" data-sitekey="6LeGbYcdAAAAACsyTrTtSjyf8GK23PsYDXdOoxdp"></div>

                </div>

                <?php
                if (isset($_GET['reg_err'])) {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch ($err) {
                        case 'success':
                            ?>
                            <div class="success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                            <?php
                            break;
                        case 'password_condition':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> mot de passe ne respecte pas les conditions
                            </div>
                            <?php
                            break;
                        case 'password':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                            <?php
                            break;

                        case 'email':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> email non valide
                            </div>
                            <?php
                            break;

                        case 'email_length':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> email trop long
                            </div>
                            <?php
                            break;

                        case 'pseudo_length':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php
                        case 'already':
                            ?>
                            <div class="alert ">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php

                    }
                }
                ?>
                <div class="login_button">
                    <input type="submit" id='submit' value='Inscription'>
                </div>
            </form>
        </div>
    </div>

</div>

</body>

</html>