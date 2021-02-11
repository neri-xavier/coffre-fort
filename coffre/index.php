<!DOCTYPE html>
<html>
    <head>
        <title>Page d'inscription</title>
    </head>
    <body>
    <form action="connected.php" method="post" class="form-inscription">
        <div class="form-inscription">
            <label for="name">Saisir votre nom: </label>
            <input type="text" name="name" id="name" required>
        </div>
    </br>
        <div class="form-inscription">
            <label for="email">Saisir votre email: </label>
            <input type="email" name="email" id="email" required>
        </div>
    </br>
        <div class="form-phonenumber">
            <label for="phone">Enter your phone number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0]{1}[0-9]{1}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
       </div>
    </br>
        <div class="form-password">
            <label for="pass">Password (8 characters minimum):</label>
            <input type="password" id="pass" name="password" minlength="8" required>
        </div>
    </br>
        <button type="submit">Inscription</button>
    </form>
    </body>
</html>