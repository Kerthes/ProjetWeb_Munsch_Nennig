<?php
session_start();
include 'Connexion_BDD.php';

$req = $objPDO -> prepare("SELECT * FROM redacteur WHERE redacteur.pseudo = ?");

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
    if ($_POST['motdepasse'] == $mdp && !empty($_POST['motdepasse'])) {
        //session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['id'] = $id;
              echo 'Vous êtes connecté !';
              //Envoie sur la page précédente
              //header("Location:".$_POST['page']);
              header("Location:Accueil.php");
    }
    else {
        header("Location:PageConnexion.php");
        echo "$mdp";
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
