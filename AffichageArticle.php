<?php
session_start();
include 'Connexion_BDD.php';
$result = $objPDO->prepare('select * from nennig16u_projetweb.sujet where idsujet=?');
$result -> bindValue('1',$_GET['id']);
$result->execute();

$rep = $objPDO->prepare("select * from nennig16u_projetweb.reponse where idsujet=?");
$rep -> bindValue('1', $_GET['id']);
$rep->execute();

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

      <?php
      if(isset($_SESSION['id'])){
        echo "<br>";
        ?>
        <form method="post" action="AjoutReponse.php">
        Ecrire un commentaire : <textarea type='text' name='textereponse'> </textarea>
        <input type='hidden' name="idsujet" value="$_GET['id']">
        <br>
        <br/>
        <input type='submit' value='Envoyer'>
        </form>
      <?php
      }
      else{
        echo "<br>";
        echo "Vous devez être connecté pour pouvoir commenter";
        echo "<br>";
        echo "<a href='Connexion.php'>Se connecter</a>";
      }
    ?>

    <table>
      <?php
        while ($row=$rep->fetch()){
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
    <br>
    <a href="Accueil.php">Retour</a>
  </body>
</html>
