<!DOCTYPE html>
<html>
    <head>
        <title>Page d'inscription</title>
    </head>
    <body>
    <form action="php/inscriptionBDD.php" method="post" class="form-inscription">
        <div class="form-inscription">
            <label for="name">Saisir votre nom: </label>
            <input type="text" name="nom" id="nom" pattern="[^\s]+" required>
        </div>
    </br>
    <div class="form-inscription">
            <label for="email">Saisir votre prénom: </label>
            <input type="text" name="prenom" id="prenom" pattern="[^\s]+" required>
        </div>
    </br>
        <div class="form-inscription">
            <label for="email">Saisir votre email: </label>
            <input type="email" name="email" id="email" pattern="[^\s]+" required>
        </div>
    </br>
        <div class="form-phonenumber">
            <label for="phone">Enter your phone number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0]{1}[0-9]{9}" required>
       </div>
    </br>
    <div class="form-inscription">
            <label for="email">Saisir votre login: </label>
            <input type="text" name="login" id="login" pattern="[^\s]+" required>
        </div>
    </br>
        <div class="form-password">
            <label for="pass">Password (8 characters minimum):</label>
            <input type="password" id="password" name="password" minlength="8" pattern="[^\s]+" required>
        </div>
    </br>
    <div class="form-password-confirm">
            <label for="pass">Password (8 characters minimum):</label>
            <input type="password" id="password-confirm" name="password-confirm" minlength="8" pattern="[^\s]+" required>
        </div>
    </br>
        <button type="submit">Inscription</button>
    </form>
    <p><a href="connexion.php">Connexion</a></p>
    </body>
</html>