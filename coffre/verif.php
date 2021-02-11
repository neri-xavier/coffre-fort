<!DOCTYPE html>
<html>
    <head>
        <title>Mot de passe oublié</title>
    </head>
    <body>
        <p>saisir l'addresse mail : </p>
    </br>
    <form action="mailMDP.php" method="post" class="form-verif_email">
        <div class="form-verif_email">
            <label for="email">Saisir votre email: </label>
            <input type="email" name="verif_email" id="verif_email" pattern="[^\s]+" required>
        </div>
    </br>
    <div class="form-verif_email">
            <label for="email">Confirmer votre email: </label>
            <input type="email" name="confirm-verif_email" id="confirm-verif_email" pattern="[^\s]+" required>
        </div>
    </br>
        <button type="submit">Envoyer l'email de récupération</button>
    </body>
</html>