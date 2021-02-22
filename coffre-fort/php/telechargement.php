<?php
include 'bdd.php';

header("Content-description:File transfert");
header("Content-type:application/octet-stream");
header("Content-Disposition:attachement; filename = ".$_GET["nom"].$_GET["ext"]);
header("Content-lenght:".filesize("../fichiers/".$_GET["id"].$_GET["ext"]));
ob_clean();
readfile("../fichiers/".$_GET["id"].$_GET["ext"]);


?>