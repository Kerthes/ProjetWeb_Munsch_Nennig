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
  <div>Vos Sujets:</div>
  <table>
    <?php
      while ($row=$result->fetch()){
        echo "<tr>";
        echo"<td>".$row['titresujet']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo"<td>".$row['textesujet']."</td>";
        echo "</tr>";
        echo "<br>";
      }
      ?>
    </table>
    <form method="post" action="AjoutReponse.php">
      <?php
      if(isset($_SESSION['id'])){
        echo "<br>";
        echo "Ecrire un commentaire:";
        echo "<br>";
        echo "<textarea></textarea>";
        echo "<br>";
        echo "<input type='submit' value='Envoyer'>";
      }
      else{
        echo "<br>";
        echo "Vous devez être connecté pour pouvoir commenter";
        echo "<br>";
        echo "<a href='Connexion.php'>Se connecter</a>";
      }
    ?>
    </form>
    <br>
    <a href="Accueil.php">Retour</a>
  </body>
</html>
