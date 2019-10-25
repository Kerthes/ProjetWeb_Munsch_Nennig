<?php
session_start();
include 'Connexion_BDD.php';
$idsujet=$_GET['id'];
$idreponse=$_GET['id'];

$result = $objPDO->prepare('select * from nennig16u_projetweb.sujet where idsujet=?');
$result -> bindValue('1',$idsujet);
$result->execute();

$rep = $objPDO->prepare("select * from nennig16u_projetweb.reponse where idsujet=? ORDER BY daterep DESC");
$rep -> bindValue('1', $idsujet);
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
        Ecrire un commentaire :<br> <textarea type='text' name='textereponse'> </textarea>
        <?php
        echo"<input type='hidden' name='idsujet' value='".$idsujet."' >";
        ?>
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

            $psdcom = $objPDO->prepare('select pseudo from nennig16u_projetweb.reponse,nennig16u_projetweb.redacteur where redacteur.idredacteur=reponse.idredacteur and idreponse=?');
            $psdcom -> bindValue('1',$row['idreponse']);
            $psdcom->execute();
            $req=$psdcom->fetch();

            echo "<tr>";
            echo"<td> Ecrit par ". $req['pseudo'] ." à ".$row['daterep']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo"<td>".$row['textereponse']."</td>";
            echo "</tr>";
            echo "<br>";
          }

        ?>
        <?php

        ?>
      </table>
    <br>
    <a href="Accueil.php">Retour</a>
  </body>
</html>
