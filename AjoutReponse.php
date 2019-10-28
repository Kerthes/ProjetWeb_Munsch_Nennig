<?php
session_start();
include 'Connexion_BDD.php';
$id = $_SESSION['id'];
$insert = $objPDO->prepare("insert into reponse(idsujet, idredacteur,daterep,textereponse) VALUES (?,?,?,?)") ;

$insert->bindValue(1, $_POST['idsujet']);
$insert->bindValue(2, $id);
$insert->bindValue(3,date("Y-m-d H-i"));
$insert->bindValue(4, $_POST['textereponse']);

$insert->execute();

header("Location:".$_SERVER['HTTP_REFERER']."");

?>
