<?php
include 'bdd.php';

$supprFichier = $bdd->prepare("DELETE FROM fichiers WHERE id=?");
if($supprFichier->execute(array($_GET["id"]))){
    unlink("../fichiers/".$_GET["id"].$_GET["ext"]);
    header("location:../fichiers.php");
};





?>