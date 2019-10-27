<html>
<?php
session_start();
?>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style_blog1.css" />
  <title>Blog MUNSCH&NENNIG</title>
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
    else {?>
      Vous devez être connecté pour créer un article<br><br>
      <a href='Accueil.php'> Accueil</a><br>
    <a class="navi" href="CreerCompte.php">Créer un compte</a>
    <br><a class="navi" href="PageConnexion.php">Connexion</a>
    <?php
  }
  ?>
</div>

</head><body>
    <p>
      <form class="creaart" method="POST" action="AjoutArticle.php">
        <h3> Création d'un article <h3>
          <h7>Titre :</h7><br><input type='text' name="titresujet" placeholder="Entrez le titre de l'article" required>
          <br/>
          <br/>
          <h7>Texte :</h7>
          <br/>
          <textarea type='text' name="textesujet" maxlength="255" cols="60" rows="10" required> </textarea>
          <br/>
          <br/>
        <p>
          <input type="submit" value="Poster">
      </form>
</body>

</html>
