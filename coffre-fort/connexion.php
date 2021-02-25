<?php
include 'php/verifConnexion.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style/connexion.css" rel="stylesheet">
        <title>Page d'inscription</title>
    </head>
    <body>
        <div class="container">
            <div class="connexion">
                <form action="php/connexionBDD.php" method="post" class="form-inscription">
                    <div class="champs-connexion">
                        <input type="email" name="email" id="email"  placeholder="Saisir votre email:" pattern="[^\s]+" required>
                    </div>
                </br>
                    <div class="champs-connexion">
                        <input type="password" id="password" name="password" minlength="8" placeholder="Saisir votre mot de passe:" pattern="[^\s]+" required>
                    </div>
                </br>
                    <div class="liens">
                        <p><a href="inscription.php">Inscription</a></p>
                        <p><a href="verif.php">Mot de passe oublié</a></p>
                    </div>
                    <button type="submit"><div id="text-connexion">Connexion</div></button>
                </form>
            </div>
        </div>
    </body>
</html>