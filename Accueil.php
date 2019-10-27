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

</head>
<body>

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
<p>
  <?php
  if(isset($_SESSION['id'])){

  }

  ?>
</php>

</body>
</html>
