<?php
include 'Connexion_BDD.php';

// verif si la variable est set et la donne à une autre variable locale
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

//les verif sont mise à true
$verifPseudo = true;
$verifEmail = true;

//requete verif pour recup les adresse et pseudo
$result = $objPDO -> query("select pseudo, adressemail from redacteur");


// verif de l'existence du pseudo / @ mail dans la bdd et mise en false de la variable si existant
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
// renvoie un id d'erreur selon la variable deja existante qui va afficher l'erreur dans la page de créer un compte + redirection vers la page
else if ($verifPseudo==true) header("Location:CreerCompte.php?erreur=1");
else if ($verifEmail==true) header("Location:CreerCompte.php?erreur=2");
else header("Location:CreerCompte.php?erreur=3");
?>
