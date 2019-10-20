<?php
session_start();
include 'Connexion_BDD.php';

$insert = $objPDO->prepare("Insert into nennig16u_projetweb.sujet(titre,text,redacteur,date) VALUES (:titre,:text,:redacteur,:date");

$insert->bindValue('titre', $_POST['titre']);
$insert->bindValue('text', $_POST['text']);
$insert->bindValue('redacteur', $_SESSION['id']);
$insert->bindValue('date', now());

$insert->execute();

header("Location:CreerCompte.php")

?>
