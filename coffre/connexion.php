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
                        <label for="email">Saisir votre email: </label>
                        <input type="email" name="email" id="email" pattern="[^\s]+" required>
                    </div>
                </br>
                    <div class="champs-connexion">
                        <label for="pass">Password (8 characters minimum):</label>
                        <input type="password" id="password" name="password" minlength="8" pattern="[^\s]+" required>
                    </div>
                </br>
                    <button type="submit">Connexion</button>
                </form>
            </div>
        </br>
            <div class="liens">
                <p><a href="inscription.php">Inscription</a></p>
                <p><a href="verif.php">Mot de passe oublié</a></p>
            </div>
        </div>
    </body>
</html>