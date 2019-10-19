<?php
include 'Connexion_BDD.php';
$insert = $objPDO->prepare("Insert into nennig16u_projetweb.redacteur(nom,prenom,adressemail,motdepasse,pseudo) VALUES (:nom,:prenom,:mail,:mdp,:pseudo)");

$insert->bindValue('nom', $_POST['nom']);
$insert->bindValue('prenom', $_POST['prenom']);
$insert->bindValue('adressemail', $_POST['mail']);
$insert->bindValue('motdepasse', $_POST['mdp']);
$insert->bindValue('pseudo', $_POST['pseudo']);

$insert->execute();

header("Location:CreerCompte.php")

?>
