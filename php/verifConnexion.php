<?php
session_start();

if(isset($_SESSION['prenomNom'])){
    header('Location: index.php');
    exit;
}
?>