<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:connexion.php");
      exit();
   }
?>
<nav>
    <ul>
        <ol><a href="../coffre/informations.php">Mes informations</a></ol>
        <ol><a href="../coffre/fichiers.php">Mes fichiers</a></ol>
        <ol id="deco"><a href="../coffre/php/deconnexion.php">Deconnexion</a></ol>
    </ul>
</nav>