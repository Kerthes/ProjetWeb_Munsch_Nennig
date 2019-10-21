<html>
<head>
<title>Blog MUNSCH&NENNIG</title>
</head>
<body>
<?php
include 'Connexion_BDD.php';
$result = $objPDO->query('select * from nennig16u_projetweb.sujet ');
?>
<h1>Blog</h1>
<a href="PageConnexion.php">Connexion</a>
</br>
<a href="CreerCompte.php">Créer un compte</a>

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
        echo"<td align='center'>". $row['date']."</td>";
        echo"<td align='center'><a href="AffichageArticle.php"</a></td>";
        /*echo"<td align='center'>". $row['Latitude']."</td>";
        echo"<td align='center'>". $row['Longitude']."</td>";*/
    echo"</tr>";
   }
    $result->closeCursor();
     ?>

    </table>
  </p>

</body>
</html>
