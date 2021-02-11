<?php
include 'bdd.php';

$nom = trim(htmlspecialchars($_REQUEST['nom']));
$prenom = trim(htmlspecialchars($_REQUEST['prenom']));
$email = trim(htmlspecialchars($_REQUEST['email']));
$tel = trim(htmlspecialchars($_REQUEST['phone']));
$login = trim(htmlspecialchars($_REQUEST['login']));
$password = trim(htmlspecialchars($_REQUEST['password']));
$passwordConfirm = trim(htmlspecialchars($_REQUEST['password-confirm']));
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