<!DOCTYPE html>
<html>
    <head>
        <title>Page d'inscription</title>
    </head>
    <body>
    <form action="inscription" method="post" class="form-inscription">
        <div class="form-inscription">
            <label for="email">Saisir votre email: </label>
            <input type="email" name="email" id="email" required>
        </div>
    </br>
        <div class="form-password">
            <label for="pass">Password (8 characters minimum):</label>
            <input type="password" id="pass" name="password" minlength="8" required>
        </div>
    </br>
        <button type="submit"><a href="./connected.php">Connexion</a></button>
    </form>
    </body>
</html>