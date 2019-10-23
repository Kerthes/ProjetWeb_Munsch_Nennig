<?php
session_start();
include 'Connexion_BDD.php';

$req = $objPDO -> prepare("SELECT * FROM nennig16u_projetweb.redacteur WHERE redacteur.pseudo = ?");

$req->bindValue(1, $_POST['pseudo']);

$req->execute();

while($row = $req->fetch()){
  $mdp = $row['motdepasse'];
  $pseudo = $row['pseudo'];
  $id = $row['idredacteur'];
}

if (!$req)
{
    echo 'Mauvais identifiant ou mot de passe !';
    header("Location:PageConnexion.php");
}
else
{
    if ($_POST['motdepasse'] == $mdp) {
        //session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['id'] = $id;
              echo 'Vous êtes connecté !';
              header("Location:Accueil.php");
    }
    else {
        header("Location:PageConnexion.php");
        echo "$mdp";
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
