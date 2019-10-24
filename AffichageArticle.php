<?php
session_start();
include 'Connexion_BDD.php';
$result = $objPDO->query('select * from nennig16u_projetweb.sujet ');
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
        echo"<td align='center'>".$row['titresujet']."</td>";
        echo"<td align='center'>".$row['textesujet']."</td>";
        echo "<br>";
      }
    ?>
  </table>
    <br>
    <a href="Accueil.php">Retour</a>
  </body>
</html>
