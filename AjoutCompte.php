<?php
include 'Connexion_BDD.php';

if(isset($_POST['nom'])){
  $nom=$_POST['nom'];
}

if(isset($_POST['prenom'])){
  $prenom=$_POST['prenom'];
}

if(isset($_POST['adressemail'])){
  $adressemail=$_POST['adressemail'];
}

if(isset($_POST['motdepasse'])){
  $pseudo=$_POST['motdepasse'];
}

if(isset($_POST['pseudo'])){
  $pseudo=$_POST['pseudo'];
}

$verifPseudo = true;
$verifEmail = true;

//verif
$result = $objPDO -> query("select pseudo, adressemail from redacteur");
foreach ($result as $row) {
  if($_POST['pseudo']==$row['pseudo']){
    $verifPseudo = false;
  }

  if($_POST['adressemail']==$row['adressemail']){
    $verifEmail = false;
  }
}

if($verifPseudo==true && $verifEmail==true){
  $insert = $objPDO->prepare("Insert into redacteur(nom,prenom,adressemail,motdepasse,pseudo) VALUES (:nom,:prenom,:adressemail,:motdepasse,:pseudo)");

  $insert->bindValue('nom', $_POST['nom']);
  $insert->bindValue('prenom', $_POST['prenom']);
  $insert->bindValue('adressemail', $_POST['adressemail']);
  $insert->bindValue('motdepasse', $_POST['motdepasse']);
  $insert->bindValue('pseudo', $_POST['pseudo']);

  $insert->execute();

  header("Location:Accueil.php");
}
else if ($verifPseudo==true) header("Location:CreerCompte.php?erreur=1");
else if ($verifEmail==true) header("Location:CreerCompte.php?erreur=2");
else header("Location:CreerCompte.php?erreur=3");
?>
