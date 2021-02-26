<?php
include 'bdd.php';

session_start();

global $bdd;
if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])){
        error_log($_POST["password"]);
    $email=trim(htmlspecialchars($_POST["email"]));
    $password=trim(htmlspecialchars($_POST["password"]));

    $connexion=$bdd->prepare("SELECT id, prenom, nom, email, password from users WHERE email=? limit 1");
    $connexion->execute(array($email));
    $tab=$connexion->fetchAll();
    if(password_verify($password, $tab[0]["password"])){
        $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"]))." ".strtoupper($tab[0]["nom"]);
        $_SESSION["autoriser"]="oui";
        $_SESSION["email"]=$tab[0]["email"];
        $_SESSION["idUser"]=$tab[0]["id"];

        $_SESSION["erreurConnexion"] = "";
        header("location:../index.php");
        die;
    }else{
        $_SESSION["erreurConnexion"] = "Adresse mail ou mot de passe incorrect, veuillez réessayer.";
        header('Location:http://localhost/coffre-fort/connexion.php');
    }
}else{
    $_SESSION["erreurConnexion"] = "Veuillez renseigner tous les champs.";
    header('Location:http://localhost/coffre-fort/connexion.php');
}  
?>