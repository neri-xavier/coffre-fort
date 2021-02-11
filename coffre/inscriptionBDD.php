<?php
include 'bdd.php';

$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['phone'];
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$passwordConfirm = $_REQUEST['password-confirm'];
$erreur = "";

global $bdd;

if($password==$passwordConfirm){
    $testLogin=$bdd->prepare("SELECT id FROM users where login=? limit 1");
    $testLogin->execute(array($login));
    $tab=$testLogin->fetchAll();
    if(count($tab)>0){
        $erreur = "Login existe déjà!";
        echo "1";
    }

    $testMail=$bdd->prepare("SELECT id FROM users where email=? limit 1");
    $testMail->execute(array($email));
    $tab=$testMail->fetchAll();
    if(count($tab)>0){
        $erreur = "L'adresse email est déjà utilisé !";
        echo "2";
    }

    if($erreur == ""){
        $addUser = $bdd->prepare("INSERT INTO users (nom,prenom,email,tel,login,password) values(?,?,?,?,?,?)");
        if($addUser->execute(array($nom,$prenom,$email,$tel,$login,password_hash($password, PASSWORD_BCRYPT)))){
            header("location:connexion.php");
        };
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}
    
?>