<!DOCTYPE html>
<html>
    <head>
        <link href="style/test.css" rel="stylesheet">
        <title>Connecté</title>
    </head>
    <body>
        <header>
            <!--<nav>
                <ul>
                    <ol><a href="./informations.php">Mes informations</a></ol>
                    <ol><a href="./fichiers.php">Mes fichiers</a></ol>
                    <ol id="deco"><a href="./connexion.php">Deconnexion</a></ol>
                </ul>
            </nav>-->
            <?php include "lib/navbar.php";?>
        </header>
        <p>Vous êtes connecté <?php echo $_SESSION['prenomNom'] ?></p>
    </body>
</html>