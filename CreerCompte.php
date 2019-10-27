<html>
<<<<<<< HEAD
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
  <form class="co" method="POST" name="formulaire" action="AjoutCompte.php" >
    <h3>Création d'un compte</h3>
    <h7>Nom</h7><br> <input type='text' name="nom" placeholder="Entrez votre nom" required>
    <br>
    <br>
    <h7>Prénom</h7><br><input type='text' name="prenom" placeholder="Entrez votre prenom" required>
    <br>
    <br>
    <h7>Adresse Mail</h7><br><input type='email' name="adressemail" placeholder="Entrez votre adresse mail" required>
=======
<head>
  <title>Blog MUNSCH&NENNIG</title>
  <link rel="stylesheet" href="style_blog1.css" />
</head>

<body>
  <?php
  include 'Connexion_BDD.php';
  ?>

  <h1>Blog</h1>
  <h3>Création d'un compte</h3>
  <form method="POST" name="formulaire" action="AjoutCompte.php" >
    Nom <input type='text' name="nom" placeholder="Entrez votre nom" required>
    <br>
    <br>
    Prénom <input type='text' name="prenom" placeholder="Entrez votre prenom" required>
    <br>
    <br>
    Adresse Mail <input type='email' name="adressemail" placeholder="Entrez votre adresse mail" required>
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a

    <?php if (isset($_GET['erreur'])&&($_GET['erreur']==2||$_GET['erreur']==3)){
      echo"&nbsp&nbsp Adresse E-mail déjà existante";
    } ?>

    <br>
    <br>
<<<<<<< HEAD
    <h7>Mot de Passe</h7><br><input type='password' name="motdepasse" placeholder="Entrez votre mot de passe" required>
    <br>
    <br>
    <h7>Identifiant</h7><br><input type='text' name="pseudo" placeholder="Entrez votre identifiant" required>
=======
    Mot de Passe <input type='password' name="motdepasse" placeholder="Entrez votre mot de passe" required>
    <br>
    <br>
    Identifiant <input type='text' name="pseudo" placeholder="Entrez votre identifiant" required>
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a

      <?php if (isset($_GET['erreur'])&&($_GET['erreur']==1||$_GET['erreur']==3)){
        echo"&nbsp&nbsp Pseudo déjà existant";
      } ?>


    <br>
    <br>
<<<<<<< HEAD
    <br>
=======
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a
    <input type="submit" value="Créer">
  </form>
</body>
</html>
