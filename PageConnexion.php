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
  <div class="menu">

    <?php
    if(isset($_SESSION['id'])){
      echo"Vous êtes connecté en tant que ". $_SESSION['pseudo']."<br><br>";
      echo "<a href='Accueil.php'> Accueil</a><br>";
      echo "<a href='PageArticle.php'> Créer un article </a><br>";
      echo "<a class='navi' href='CreerCompte.php'>Créer un compte</a><br>";
      echo "<a href='Deconnexion.php'> Déconnexion </a><br>";
    }
    else {
      echo "Vous devez être connecté pour créer un article<br><br>
      <a href='Accueil.php'> Accueil</a><br>
      <a class='navi' href='CreerCompte.php'>Créer un compte</a>
      <br><a class='navi' href='PageConnexion.php'>Connexion</a>";
    }
    ?>

  </div>
  <form class="co" method="POST" action="Connexion.php">
    <h3>Connexion</h3>
    <h7>Identifiant</h7><br><input type='text' name="pseudo" placeholder="Entrez votre identifiant" required>
    <br>
    <br>
    <br>
    <h7>Mot de Passe</h7><br><input type='password' name="motdepasse" placeholder="Entrez votre mot de passe" required>

    <?php
    //envoie à l'aide d'une variable hidden la page précédente à celle-ci pour l'utiliser lors de la co. Utiliser principalement lors de la connexion lors de l'utilisation du lien sur un sujet et retourner dessus
    echo"<input type='hidden' name='page' value='".$_SERVER['HTTP_REFERER']."'required >";
    ?>

    <br>
    <br>
    <br>
    <input type="submit" value="Se connecter">
  </form>
</body>
</html>
