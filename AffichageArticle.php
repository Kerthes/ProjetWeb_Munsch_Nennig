<?php
session_start();
include 'Connexion_BDD.php';
$idsujet=$_GET['id'];
$idreponse=$_GET['id'];

$result = $objPDO->prepare('select * from sujet where idsujet=?');
$result -> bindValue('1',$idsujet);
$result->execute();

$rep = $objPDO->prepare("select * from reponse where idsujet=? ORDER BY daterep DESC");
$rep -> bindValue('1', $idsujet);
$rep->execute();

?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">  <header>
  <link rel="stylesheet" href="style_blog1.css" />
<<<<<<< HEAD
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
  </header>
</div>
</head>
<body>
  <h3>Vos Sujets</h3>
  <center><table class="sujindiv">
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
  </table></center>

  <?php
  if(isset($_SESSION['id'])){
    echo "<br>";
    ?>
    <form class="creaart" method="post" action="AjoutReponse.php">
      <br>
      Ecrire un commentaire :<br> <textarea type='text' name='textereponse' rows="6" cols='60'> </textarea>
      <?php
      echo"<input type='hidden' name='idsujet' value='".$idsujet."'required >";
      ?>
      <br>
      <br>
      <input type='submit' value='Envoyer'>
      <br>
        <?php
        while ($row=$rep->fetch()){
          $psdcom = $objPDO->prepare('select pseudo from reponse,redacteur where redacteur.idredacteur=reponse.idredacteur and idreponse=?');
          $psdcom -> bindValue('1',$row['idreponse']);
          $psdcom->execute();
          $req=$psdcom->fetch();
          echo "<center><table class='rep'>";
          echo "<tr>";
          echo"<td> Ecrit par ". $req['pseudo'] ." le ".$row['daterep']."</td>";
          echo "</tr>";
          echo "<tr>";
          echo"<td>".$row['textereponse']."<br/><br/></td>";
          echo "</tr>";
          echo "</table></center>";
        }

        ?>
      <br>
    </form>
    <?php
  }
  else{
    echo "<br>";
    echo "<center>Vous devez être connecté pour pouvoir commenter</center>";
  }
  ?>


=======
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
      Ecrire un commentaire :<br> <textarea type='text' name='textereponse' cols='60'> </textarea>
      <?php
      echo"<input type='hidden' name='idsujet' value='".$idsujet."'required >";
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

      $psdcom = $objPDO->prepare('select pseudo from reponse,redacteur where redacteur.idredacteur=reponse.idredacteur and idreponse=?');
      $psdcom -> bindValue('1',$row['idreponse']);
      $psdcom->execute();
      $req=$psdcom->fetch();

      echo "<tr>";
      echo"<td> Ecrit par ". $req['pseudo'] ." à ".$row['daterep']."</td>";
      echo "</tr>";
      echo "<tr>";
      echo"<td>".$row['textereponse']."<br/><br/></td>";
      echo "</tr>";
    }

    ?>
    <?php

    ?>
  </table>
  <br>
  <a href="Accueil.php">Retour</a>
>>>>>>> 548f1dcf0eeec22f77648e777a9ba0eddb9c9e9a
</body>
</html>
