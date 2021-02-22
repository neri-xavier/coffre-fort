<?php
include 'php/verifConnexion.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mot de passe oublié</title>
    </head>
    <body>
	<h4 class="title-element">Récupération de mot de passe</h4>
<?php if(isset($_GET['section']) && $_GET['section'] == 'code') { ?>
Un code de vérification vous a été envoyé par mail: <?= $_SESSION['recup_mail'] ?>
<br/>
<form method="post" action="php/mailMDP.php">
   <input type="text" placeholder="Code de vérification" name="verif_code"/><br/>
   <input type="submit" value="Valider" name="verif_submit"/>
</form>
<?php } elseif(isset($_GET['section']) && $_GET['section'] == "changemdp") { ?>
Nouveau mot de passe pour <?= $_SESSION['recup_mail'] ?>
<form method="post" action="php/mailMDP.php">
   <input type="password" placeholder="Nouveau mot de passe" name="change_mdp"/><br/>
   <input type="password" placeholder="Confirmation du mot de passe" name="change_mdpc"/><br/>
   <input type="submit" value="Valider" name="change_submit"/>
</form>
<?php } else { ?>
<form method="post" action="php/mailMDP.php">
   <input type="email" placeholder="Votre adresse mail" name="verif_email"/><br/>
   <input type="email" placeholder="Votre adresse mail" name="confirm_verif_email"/><br/>
   <input type="submit" value="Valider" name="recup_submit"/>
</form>
<?php } ?>
<?php if(isset($_SESSION['erreurMDP'])) { echo '<span style="color:red">'.$_SESSION['erreurMDP'].'</span>'; } else { echo ""; } ?>

    </body>
</html>