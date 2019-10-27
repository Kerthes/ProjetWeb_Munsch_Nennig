<?php
session_start();
include 'Connexion_BDD.php';
?>
<html>
<head>
<link rel="stylesheet" href="style_blog1.css" />
<title>Blog MUNSCH&NENNIG</title>
</head>
<body>
<h1>Blog</h1>
<<<<<<< HEAD
<div class="menu">
<?php
if(isset($_SESSION['id'])){
  echo"Vous êtes connecté en tant que ". $_SESSION['pseudo']."<br><br>";
  echo "<a href='Accueil.php'> Accueil</a><br>";
  echo "<a href='PageArticle.php'> Créer un article </a><br>";
  echo "<a class='navi' href='CreerCompte.php'>Créer un compte</a><br>";
  echo "<a href='Deconnexion.php'> Déconnexion </a><br>";
}
else {?>
  Vous devez être connecté pour créer un article<br><br>
  <a href='Accueil.php'> Accueil</a><br>
<a class="navi" href="CreerCompte.php">Créer un compte</a>
<br><a class="navi" href="PageConnexion.php">Connexion</a>
</div>
<?php }
 ?>
<form class="co" method="POST" action="Connexion.php">
  <h3>Connexion</h3>
  <h7>Identifiant</h7><br><input type='text' name="pseudo" placeholder="Entrez votre identifiant" required>
  <br>
  <br>
=======
<h3>Connexion</h3>
<form method="POST" action="Connexion.php">
  Identifiant <input type='text' name="pseudo" placeholder="Entrez votre identifiant" required>
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a
  <br>
  <h7>Mot de Passe</h7><br><input type='password' name="motdepasse" placeholder="Entrez votre mot de passe" required>
<?php echo"<input type='hidden' name='page' value='".$_SERVER['HTTP_REFERER']."'required >"; ?>
  <br>
<<<<<<< HEAD
=======
  Mot de Passe <input type='password' name="motdepasse" placeholder="Entrez votre mot de passe" required>
<?php echo"<input type='hidden' name='page' value='".$_SERVER['HTTP_REFERER']."'required >"; ?>
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a
  <br>
  <br>
  <input type="submit" value="Se connecter">
</form>
</body>
</html>
