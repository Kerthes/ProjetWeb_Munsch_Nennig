<?php
session_start();
include 'Connexion_BDD.php';
$result = $objPDO->query('select * from sujet ORDER BY datesujet DESC ');
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Blog MUNSCH&NENNIG</title>

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

</head>
<body>

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

<p>
  <?php
  if(isset($_SESSION['id'])){
    echo "<a href='PageArticle.php'> Créer un article </a>";
  }
  else {
    echo "Vous devez être connecté pour créer un article !";
  }
  ?>
</php>

</body>
</html>
