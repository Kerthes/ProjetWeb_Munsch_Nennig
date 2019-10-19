<html>
<head>
<title>Blog MUNSCH&NENNIG</title>
</head>
<body>
<?php
include 'Connexion_BDD.php';
?>
<h1>Blog</h1>
<h3>Création d'un compte</h3>
<form method="POST" action="AjoutCompte.php">
  Nom <input type='text' name="nom" placeholder="Entrez votre nom">
  <br>
  <br>
  Prénom <input type='text' name="prenom" placeholder="Entrez votre prenom">
  <br>
  <br>
  Adresse Mail <input type='text' name="mail" placeholder="Entrez votre adresse mail">
  <br>
  <br>
  Mot de Passe <input type='password' name="mdp" placeholder="Entrez votre mot de passe">
  <br>
  <br>
  Identifiant <input type='text' name="pseudo" placeholder="Entrez votre identifiant">
  <br>
  <br>
  <input type="submit" value="Créer">
</form>
</body>
</html>
