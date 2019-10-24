<?php
session_start();
include 'Connexion_BDD.php';
?>
<html>
<head>
<title>Blog MUNSCH&NENNIG</title>
</head>
<body>
<h1>Blog</h1>
<h3>Connexion</h3>
<form method="POST" action="Connexion.php">
  Identifiant <input type='text' name="pseudo" placeholder="Entrez votre identifiant" >
  <br>
  <br>
  Mot de Passe <input type='password' name="motdepasse" placeholder="Entrez votre mot de passe">
  <br>
  <br>
  <input type="submit" value="Se connecter">
</form>
</body>
</html>
