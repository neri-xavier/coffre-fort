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
        <h4 class="title-element">Récupération de mot de passe</h4>
        <?php if(isset($_GET['section']) && $_GET['section'] == 'code') { ?>
            Un code de vérification vous a été envoyé par mail: <?= $_SESSION['recup_mail'] ?>
        <br/><br/>
        <form method="post" action="php/mailMDP.php">
            <input type="text" placeholder="Code de vérification" name="verif_code"/><br/><br/>
            <button type="submit" value="Valider" name="verif_submit"><div id="text-confirmation">Valider</div></button>
        </form>
        <?php } elseif(isset($_GET['section']) && $_GET['section'] == "changemdp") { ?>
            Nouveau mot de passe pour <?= $_SESSION['recup_mail'] ?><br/>
        <form method="post" action="php/mailMDP.php">
            <input type="password" placeholder="Nouveau mot de passe" name="change_mdp"/><br/><br/>
            <input type="password" placeholder="Confirmation du mot de passe" name="change_mdpc"/><br/><br/>
            <button type="submit" value="Valider" name="change_submit"><div id="text-confirmation">Valider</div></button>
        </form>
        <?php } else { ?>
            <form method="post" action="php/mailMDP.php">
                <input type="email" placeholder="Votre adresse mail" name="verif_email"/><br/><br/>
                <input type="email" placeholder="Confirmer votre adresse mail" name="confirm_verif_email"/><br/><br/>
                </br>
                <button type="submit" value="Valider" name="recup_submit"><div id="text-confirmation">Valider</div></button>
            </form>
        <?php } ?>
            <?php if(isset($_SESSION['erreurMDP'])) { echo '<span style="color:red">'.$_SESSION['erreurMDP'].'</span>'; } else { echo ""; } ?>
            <div class="liens">
                <p><a href="connexion.php">Connexion</a></p>
            </div>
        </div> 
    </body>
</html>