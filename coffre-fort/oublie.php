<?php
include 'php/verifConnexion.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mot de passe oublié</title>
    </head>
    <body>
        <p>Definir un nouveau mot de passe : </p>
    </br>
    <form action="php/newMDP.php" method="post" class="form-new_password">
        <div class="form-new_password">
            <label for="pass">Nouveau mot de passe (8 characters minimum):</label>
            <input type="password" id="new_password" name="new_password" minlength="8" pattern="[^\s]+" required>
        </div>
    </br>
        <div class="form-new_password">
            <label for="pass">Confirmer le nouveau mot de passe (8 characters minimum):</label>
            <input type="password" id="confirm-new_password" name="confrim_new_password" minlength="8" pattern="[^\s]+" required>
        </div>
    </br>
        <button type="submit">Changer le mot de passe</button>
    </body>
</html>