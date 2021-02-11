<?php
include 'bdd.php';

session_start();

$email=trim(htmlspecialchars($_POST["email"]));
$password=trim(htmlspecialchars($_POST["password"]));

global $bdd;

    $connexion=$bdd->prepare("SELECT prenom, nom, password from users WHERE email=? limit 1");
    $connexion->execute(array($email));
    $tab=$connexion->fetchAll();
    if(password_verify($password, $tab[0]["password"])){
        $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"]))." ".strtoupper($tab[0]["nom"]);
        $_SESSION["autoriser"]="oui";
        header("location:../index.php");
    }else{
        header("location:../connexion.php");
    }
    
?>