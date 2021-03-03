<?php
include 'php/verifConnexion.php';

if(isset($_SESSION['erreurMDP'])){
    $_SESSION['erreurMDP'] = "";
}

if(isset($_SESSION['erreurConnexion'])){
    $_SESSION['erreurConnexion'] = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style/inscription.css" rel="stylesheet">
        <title>Page d'inscription</title>
    </head>
    <body>
        <div class="container">
            <form action="php/inscriptionBDD.php" id="formInscription" method="post" class="form-inscription">
                <div class="inscription">
                    <input type="text" name="nom" id="nom" placeholder="Saisir votre nom" pattern="[^\s]+" required>
                </div>
            </br>
            <div class="inscription">
                    <input type="text" name="prenom" id="prenom" placeholder="Saisir votre prénom" pattern="[^\s]+" required>
                </div>
            </br>
                <div class="inscription">
                    <input type="email" name="email" id="email" placeholder="Saisir votre email"pattern="[^\s]+" required>
                </div>
            </br>
                <div class="inscription">
                    <input type="tel" id="phone" name="phone" placeholder="Saisir votre numéro" pattern="[0]{1}[0-9]{9}" required>
            </div>
            </br>
                <div class="inscription">
                    <input type="password" id="password" name="password" minlength="8" placeholder="Saisir un mot de passe" pattern="[^\s]+" required>
                </div>
            </br>
            <div class="inscription">
                    <input type="password" id="password-confirm" name="password-confirm" minlength="8" placeholder="confirmer le mot de passe"pattern="[^\s]+" required>
                </div>
            </br>
            <?php if(isset($_SESSION['erreurInscription'])) { echo '<span style="color:red">'.$_SESSION['erreurInscription'].'</span>'; } else { echo ""; } ?>
            <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
                <button type="submit"><div id="text-inscription">Inscription</div></button>
            </form>
       
    
            <script src="https://www.google.com/recaptcha/api.js?render=6LdsjloaAAAAAO4wUm8YNXVqgkxBGvV5Dc-1SjZn"></script>
            <script>

                grecaptcha.ready(function() {
                    grecaptcha.execute('6LdsjloaAAAAAO4wUm8YNXVqgkxBGvV5Dc-1SjZn', {action: 'homepage'}).then(function(token) {
                        document.getElementById('recaptchaResponse').value = token
                    });
                });

            </script>
            <div class="liens">
                <p><a href="connexion.php">Connexion</a></p>
            </div>
        </div>
    </body>
</html>