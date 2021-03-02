<?php
include 'php/verifConnexion.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style/oublie.css" rel="stylesheet">
        <title>Mot de passe oublié</title>
    </head>
    <body>
        <div class="container">
            <p>Definir un nouveau mot de passe : </p>
            </br>
            <form action="php/newMDP.php" method="post" class="form-new_password">
                <div class="form-new_password">
                    <input type="password" id="new_password" name="new_password" minlength="8" placeholder="saisir le nouveau mot de passe" pattern="[^\s]+" required>
                </div>
            </br>
                <div class="form-new_password">
                    <input type="password" id="confirm-new_password" name="confrim_new_password" minlength="8" placeholder="confirmer le nouveau mot de passe" pattern="[^\s]+" required>
                </div>
            </br>
        <button type="submit">Changer le mot de passe</button>
    </body>
</html>