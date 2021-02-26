<?php
include 'bdd.php';

// On vérifie que la méthode POST est utilisée
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['recaptcha-response'])){
        header('Location: ../index.php');
    }else{
        // On prépare l'URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LdsjloaAAAAADXfXRkrzlLuIyDipTqzbCkWOIqR&response={$_POST['recaptcha-response']}";

        // On vérifie si curl est installé
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        }else{
            // On utilisera file_get_contents
            $response = file_get_contents($url);
        }
            // On vérifie qu'on a une réponse
        if(empty($response) || is_null($response)){
            header('Location: ../index.php');
        }else{
            $data = json_decode($response);
            if($data->success){
                $nom = trim(htmlspecialchars($_REQUEST['nom']));
                $prenom = trim(htmlspecialchars($_REQUEST['prenom']));
                $email = trim(htmlspecialchars($_REQUEST['email']));
                $tel = trim(htmlspecialchars($_REQUEST['phone']));
                $password = trim(htmlspecialchars($_REQUEST['password']));
                $passwordConfirm = trim(htmlspecialchars($_REQUEST['password-confirm']));
                $erreur = "";

                global $bdd;

                if($password==$passwordConfirm){
                    $testMail=$bdd->prepare("SELECT id FROM users where email=? limit 1");
                    $testMail->execute(array($email));
                    $tab=$testMail->fetchAll();
                    if(count($tab)>0){
                        $erreur = "L'adresse email est déjà utilisé !";
                    }

                    if($erreur == ""){
                        $addUser = $bdd->prepare("INSERT INTO users (nom,prenom,email,tel,password) values(?,?,?,?,?)");
                        if($addUser->execute(array($nom,$prenom,$email,$tel,password_hash($password, PASSWORD_BCRYPT)))){
                            header("location:../connexion.php");
                        };
                    }else{
                        header("Location:http://localhost/coffre-fort/inscription.php");
                        //header("location:../index.php");
                    }
                }else{
                    header("location:../index.php");
                }
            }else{
                header("location:../index.php");
            }
        }
    }
}else{
    http_response_code(405);
    echo 'Méthode non autorisée';
}
?>