<?php
include "lib/navbar.php";
include 'php/bdd.php';

$maxSize = 500000;
$invalidExt = array('.php', '.pl', '.jsp', '.asp', '.sh', '.cgi');
$erreur = "";

if(isset($_FILES['fichier'])){

    if($_FILES['fichier']['error'] > 0){
        $erreur = 'Erreur';
        die;
    }

    $fileSize = $_FILES['fichier']['size'];

    if($fileSize > $maxSize){
        $erreur = 'Fichier trop volumineux !';
        die;
    }

    $fileExt = ".".strtolower(substr(strrchr($_FILES['fichier']['name'],'.'),1));

    if(!in_array($fileExt, $invalidExt)){

        $fichier = $_FILES['fichier']['name'];
        $fileName = md5(uniqid(rand(), true));

        $addFichier = $bdd->prepare("INSERT INTO fichiers (id,id_user,nom) values(?,?,?)");
        if($addFichier->execute(array($fileName,$_SESSION["idUser"],$fichier))){
            if(move_uploaded_file($_FILES['fichier']['tmp_name'], 'fichiers/'.$fileName.$fileExt)){
                $erreur = "Transfert terminé !";
                $_SESSION["msgFichier"] = $erreur;
                header('Location: fichiers.php');
                exit;
            }
        }
    }else{
        $erreur = "Cette extention n'est pas prise en charge.";
        $_SESSION["msgFichier"] = $erreur;
        header('Location: fichiers.php');
        die;
    }
}

$listeFichiers=$bdd->prepare("SELECT id, nom FROM fichiers where id_user=?");
$listeFichiers->execute(array($_SESSION["idUser"]));
$tabFichiers=$listeFichiers->fetchAll();


?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style/test.css" rel="stylesheet">
        <title>Gestionnaire de fichiers</title>
    </head>
    <body>
        <header>
           
        </header>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="fichier" required>
            <input type="submit" name="valider">
        </form>
            <?php if(isset($_SESSION["msgFichier"])){ echo '<span style="color:red">'.$_SESSION['msgFichier'].'</span>';}else{echo "";} ?>
        <br/>
        <?php
            foreach($tabFichiers as $key => $value){
        ?>
        
            <a href="php/telechargement.php?id=<?php echo $value["id"]; ?>&nom=<?php echo $value["nom"]; ?>&ext=<?php echo ".".strtolower(substr(strrchr($value["nom"],'.'),1)); ?>"><?php echo $value["nom"]; ?></a>
            <br/>
        <?php
            }
        ?>   
    </body>
</html>

