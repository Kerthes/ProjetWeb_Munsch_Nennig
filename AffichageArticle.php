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
  else {
    echo "Vous devez être connecté pour créer un article<br><br>";
    echo "<a href='Accueil.php'> Accueil</a><br>";
    echo "<a class='navi' href='CreerCompte.php'>Créer un compte</a>";
    echo "<br><a class='navi' href='PageConnexion.php'>Connexion</a>";
  }
  ?>
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
  echo "</table></center>";

  if(isset($_SESSION['id'])){
    echo "<br>";
    echo "<form class='creaart' method='post' action='AjoutReponse.php'>
    <br>
    Ecrire un commentaire :<br> <textarea type='text' name='textereponse' rows='6' cols='60'> </textarea>";
    echo"<input type='hidden' name='idsujet' value='".$idsujet."'required >
    <br>
    <br>
    <input type='submit' value='Envoyer'>
    <br>";
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
      echo "<br></form>";
    }
    else{
      echo "<br>";
      echo "<center>Vous devez être connecté pour pouvoir commenter</center>";
    }
  ?>
</body>
</html>
