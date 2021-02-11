<!DOCTYPE html>
<html>
    <head>
        <title>Page d'inscription</title>
    </head>
    <body>
    <form action="connexionBDD.php" method="post" class="form-inscription">
        <div class="form-inscription">
            <label for="email">Saisir votre email: </label>
            <input type="email" name="email" id="email" required>
        </div>
    </br>
        <div class="form-password">
            <label for="pass">Password (8 characters minimum):</label>
            <input type="password" id="password" name="password" minlength="8" required>
        </div>
    </br>
        <button type="submit">Connexion</button>
    </form>
    </body>
</html>