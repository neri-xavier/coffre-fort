<?php
session_start();
if(!isset($_SESSION['prenomNom'])){
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style/commande.css" rel="stylesheet">
        <title>Page de commmande</title>
    </head>
    <body>
        <header>
           <?php include "lib/navbar.php";?>
        </header>
        <div class="container">
            <form action="php/commandeBDD.php" method="post" class="form-commande">
                <div class="commande">
                    <label for="name">Saisir référence du produit : </label>
                    <input type="text" name="nom-produit" id="nom-produit" pattern="[^\s]+" required>
                </div>
            </br>
                <div class="commande">
                    <label for="version">Version du système d'exploitation : </label>
                    <input type="text" name="version" id="version" pattern="[^\s]+">
                </div>
            </br>
                <div class="commande-area">
                    <div class="titre">
                        <label for="nature">Decrir la nature du problème : </label>
                    </div>
                    <textarea id="nature" name="nature" placeholder="description du problème" required></textarea>
                </div>
            </br>
                <div class="commande-image">
                    <label for="version">Ajouter des images (facultatif) : </label>
                    <div class="fichier">
                        <input type="file" id="image" name="images" accept="image/png, image/jpeg">
                    </div>
                </div>
            </br>
                <button type="submit">Passer commande</button>
            </form>
        </div>
    </body>
</html>