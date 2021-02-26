<?php
include 'bdd.php';

session_start();

$nomProduit = htmlspecialchars($_REQUEST['nom-produit']);
$version = htmlspecialchars($_REQUEST['version']);
$nature = htmlspecialchars($_REQUEST['nature']);

global $bdd;

$addProduit = $bdd->prepare("INSERT INTO produit (reference_produit,version_produit,detail) values(?,?,?)");
$addProduit->execute(array($nomProduit,$version,$nature));
    

$maxIdProduit=$bdd->query("SELECT MAX(id_produit) AS MAXID FROM produit");
$tab=$maxIdProduit->fetchAll();
if(count($tab)>0){
    $maxIdProduit = $tab[0]["MAXID"];
}else{
    $maxIdProduit = 0;
}

$addCommande = $bdd->prepare("INSERT INTO suivi_commande (id_produit,email_client) values(?,?)");
if($addCommande->execute(array($maxIdProduit,$_SESSION["email"]))){
    header("location:../index.php");
};
?>