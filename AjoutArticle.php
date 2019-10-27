<?php
session_start();
include 'Connexion_BDD.php';
$id = $_SESSION['id'];
$insert = $objPDO->prepare("Insert into sujet(idredacteur,titresujet,textesujet,datesujet) VALUES (?,?,?,?)") ;

$insert->bindValue(1, $id);
$insert->bindValue(2, $_POST['titresujet']);
$insert->bindValue(3, $_POST['textesujet']);
$insert->bindValue(4,date("Y-m-d H-i"));

$insert->execute();

print_r($objPDO->errorCode());
header("Location:Accueil.php")

?>
