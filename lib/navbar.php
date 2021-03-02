<?php
session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:connexion.php");
      exit();
   }
?>
<nav>
    <ul>
        <ol><a href="../coffre-fort/fichiers.php">Mes fichiers</a></ol>
        <ol id="deco"><a href="../coffre-fort/php/deconnexion.php">Deconnexion</a></ol>
    </ul>
</nav>