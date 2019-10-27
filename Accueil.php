<?php
session_start();
include 'Connexion_BDD.php';
$result = $objPDO->query('select * from sujet ORDER BY datesujet DESC ');
?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style_blog1.css" />
  <title>Blog MUNSCH&NENNIG</title>
<<<<<<< HEAD
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
=======

  <header>
    <a href='Accueil.php'> Accueil</a>
    <br/>
    <?php
    if(isset($_SESSION['id'])){
      echo"Vous êtes connecté en tant que ". $_SESSION['pseudo']."<br/>";
      echo "<a href='Deconnexion.php'> Déconnexion </a>";
    }
    else {?>
      <a href="PageConnexion.php">Connexion</a>
    </br>
    <a href="CreerCompte.php">Créer un compte</a>
    <?php
  }
  ?>
</header>
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a

</head>
<body>

<<<<<<< HEAD
<p>

    <?php
    while ($row=$result->fetch()){
      echo "<center><table class='suj' border='0'>";
      echo "<tr>";
      echo"<td align='center'>".$row['titresujet']."</td>";
      echo "</tr>";
      echo "<tr>";
      echo"<td align='center'>". $row['datesujet']."</td>";
      echo "</tr>";?>
      <tr>
        <td align='center'> <a href=<?php echo ("AffichageArticle.php?id=".$row['idsujet']); ?> > Lien </a> </td>
      </tr>
      <?php
      echo "</table></center>";
    }
    $result->closeCursor();
    ?>
</p>
=======
  <h1>Blog</h1>

<p>
  <table border="1">
    <tr>
      <td align="center"> Titre du sujet </td>
      <td align="center"> Date </td>
      <td align="center"> Lien vers le sujet </td>
    </tr>
    <?php
    while ($row=$result->fetch()){
      echo"<tr>";
      echo"<td align='center'>".$row['titresujet']."</td>";
      echo"<td align='center'>". $row['datesujet']."</td>";?>
      <td align='center'> <a href=<?php echo ("AffichageArticle.php?id=".$row['idsujet']); ?> > Lien </a> </td>
      <?php
      echo"</tr>";
    }
    $result->closeCursor();
    ?>
  </table>
</p>

>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a
<p>
  <?php
  if(isset($_SESSION['id'])){

  }
<<<<<<< HEAD

=======
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a
  ?>
</php>

</body>
</html>
