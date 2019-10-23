<?php
session_start();
include 'Connexion_BDD.php';
$result = $objPDO->query('select * from nennig16u_projetweb.sujet ');
?>
<html>
<head>
<title>Blog MUNSCH&NENNIG</title>
</head>
<body>

<h1>Blog</h1>

<p>
  <?php
  if(isset($_SESSION['id'])){
    echo"Bonjour ". $_SESSION['pseudo']."";
    echo "<a href='Deconnexion.php'> Déconnexion </a>";
  }
  else {?>
  <a href="PageConnexion.php">Connexion</a>
  </br>
  <a href="CreerCompte.php">Créer un compte</a>
  <?php
  }
?>
</p>

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
        echo"<td align='center'>". $row['date']."</td>";?>
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
