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
  <form method="POST" name="formulaire" action="AjoutCompte.php" >
    Nom <input type='text' name="nom" placeholder="Entrez votre nom" required>
    <br>
    <br>
    Prénom <input type='text' name="prenom" placeholder="Entrez votre prenom" required>
    <br>
    <br>
    Adresse Mail <input type='email' name="adressemail" placeholder="Entrez votre adresse mail" required>

    <?php if (isset($_GET['erreur'])&&($_GET['erreur']==2||$_GET['erreur']==3)){
      echo"&nbsp&nbsp Adresse E-mail déjà existante";
    } ?>

    <br>
    <br>
    Mot de Passe <input type='password' name="motdepasse" placeholder="Entrez votre mot de passe" required>
    <br>
    <br>
    Identifiant <input type='text' name="pseudo" placeholder="Entrez votre identifiant" required>

      <?php if (isset($_GET['erreur'])&&($_GET['erreur']==1||$_GET['erreur']==3)){
        echo"&nbsp&nbsp Pseudo déjà existant";
      } ?>


    <br>
    <br>
    <input type="submit" value="Créer">
  </form>
</body>
</html>
