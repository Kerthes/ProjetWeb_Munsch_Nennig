<?php
session_start();
include 'Connexion_BDD.php';
$result = $objPDO->prepare('select * from nennig16u_projetweb.sujet where idsujet=?');
$result -> bindValue('1',$_GET['id']);
$result->execute();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title></title>
  </head>
  <body>
  <table>
    <?php
      echo "Vos Sujets:";
      while ($row=$result->fetch()){
        echo "<tr>";
        echo"<td>".$row['titresujet']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo"<td>".$row['textesujet']."</td>";
        echo "</tr>";
        echo "<br>";
        /*?id=*/
      }
    ?>
  </table>
    <br>
    <a href="Accueil.php">Retour</a>
  </body>
</html>
