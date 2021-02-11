<!DOCTYPE html>
<html>
    <head>
        <title>Page d'inscription</title>
    </head>
    <body>
    <form action="php/connexionBDD.php" method="post" class="form-inscription">
        <div class="form-inscription">
            <label for="email">Saisir votre email: </label>
            <input type="email" name="email" id="email" pattern="[^\s]+" required>
        </div>
    </br>
        <div class="form-password">
            <label for="pass">Password (8 characters minimum):</label>
            <input type="password" id="password" name="password" minlength="8" pattern="[^\s]+" required>
        </div>
    </br>
        <button type="submit">Connexion</button>
    </form>
</br>
    <p><a href="inscription.php">Inscription</a></p>
    <p><a href="verif.php">Mot de passe oublié</a></p>
    </body>
</html>