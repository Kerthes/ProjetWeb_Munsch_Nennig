<html>
<head>
<title>Blog MUNSCH&NENNIG</title>

<script language=" javascript " type="text/javascript">
    function verifNom(f) {
        if (window.document.forms["formulaire"].nom.value!=""){
            return true;
        }
        return false;
    }

    function verifPrenom(f) {
        if(window.document.forms["formulaire"].prenom.value!=""){
            return true;
          }
        }
        return false;

    function verifmdp(f) {
        if (window.document.forms["formulaire"].motdepasse.value!=""){
            return true;
        }
        return false;
    }

    function verifpseudo(f) {
        if(window.document.forms["formulaire"].pseudo.value!=""){
            return true;
        }
        return false;
    }

    function verif(f) {
        if (verifNom(f)&&verifPrenom(f)&&verifmdp(f)&&verifpseudo(f)){
            return true;
        }
        alert("Erreur : veuillez remplir correctement les champs");
        return false;
    }
</script>

</head>
<body>
<?php
include 'Connexion_BDD.php';
?>
<h1>Blog</h1>
<h3>Création d'un compte</h3>
<form method="POST" name="formulaire" onsubmit="return verif();" action="AjoutCompte.php" >
  Nom <input type='text' name="nom" placeholder="Entrez votre nom" required>
  <br>
  <br>
  Prénom <input type='text' name="prenom" placeholder="Entrez votre prenom" required>
  <br>
  <br>
  Adresse Mail <input type='email' name="adressemail" placeholder="Entrez votre adresse mail" required>
  <br>
  <br>
  Mot de Passe <input type='password' name="motdepasse" placeholder="Entrez votre mot de passe" required>
  <br>
  <br>
  Identifiant <input type='text' name="pseudo" placeholder="Entrez votre identifiant" required>
  <br>
  <br>
  <input type="submit" value="Créer">
</form>
</body>
</html>
