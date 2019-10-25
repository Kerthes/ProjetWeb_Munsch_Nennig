<?php
include 'Connexion_BDD.php';

$insert = $objPDO->prepare("Insert into redacteur(nom,prenom,adressemail,motdepasse,pseudo) VALUES (:nom,:prenom,:adressemail,:motdepasse,:pseudo)");

$insert->bindValue('nom', $_POST['nom']);
$insert->bindValue('prenom', $_POST['prenom']);
$insert->bindValue('adressemail', $_POST['adressemail']);
$insert->bindValue('motdepasse', $_POST['motdepasse']);
$insert->bindValue('pseudo', $_POST['pseudo']);

$insert->execute();

header("Location:Accueil.php")

?>
