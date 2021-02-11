<?php
include 'connexion_bdd.php';

$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['phone'];
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];

global $bdd;
    
$testLogin=$bdd->prepare("SELECT id FROM users where login=? limit 1");
$testLogin->execute(array($login));
$tab=$testLogin->fetchAll();
if(count($tab)>0){
    echo "Login existe déjà!";
}
    
    
}else{
    $addUser = $bdd->prepare("INSERT INTO users (nom,prenom,email,tel,login,password) values(?,?,?,?,?,?)");
    $addUser->execute(array(
        $nom,
        $prenom,
        $email,
        $tel,
        $login,
        password_hash($password, PASSWORD_BCRYPT)
    ));
}
    
?>