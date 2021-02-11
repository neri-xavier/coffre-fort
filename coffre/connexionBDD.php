<?php
include 'bdd.php';

session_start();

$email=$_POST["email"];
$password=$_POST["password"];
$erreur="";
    
    $sel=$pdo->prepare("SELECT prenom, nom from users WHERE email=? and password=? limit 1");
    $sel->execute(array($email,password_hash($password, PASSWORD_BCRYPT)));
    $tab=$sel->fetchAll();
    if(count($tab)>0){
        $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"]))." ".strtoupper($tab[0]["nom"]);
        $_SESSION["autoriser"]="oui";
        header("location:fichier.php");
    }else{
        $erreur="Mauvais login ou mot de passe!";
    }
    
?>