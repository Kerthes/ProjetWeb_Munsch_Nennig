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
        return false;
    }

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

    function verifMail(f) {
        if(window.document.forms["formulaire"].adressemail.value!=""){
            var mail = window.document.forms["formulaire"].Mail.value;
            var nb=0;
            for(var i=0; i<mail.length;i++)
            {
                if (mail.charAt(i)=='@')
                {
                    nb=nb+1;
                }
            }
            if(nb==1){
                return true;
            }
            else
                return false;
        }
        return false
    }

    function verif(f) {
        if (verifNom(f)&&verifPrenom(f)&&verifmdp(f)&&verifpseudo(f)&&verifMail(f)){
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
  Nom <input type='text' name="nom" placeholder="Entrez votre nom">
  <br>
  <br>
  Prénom <input type='text' name="prenom" placeholder="Entrez votre prenom">
  <br>
  <br>
  Adresse Mail <input type='text' name="adressemail" placeholder="Entrez votre adresse mail">
  <br>
  <br>
  Mot de Passe <input type='password' name="motdepasse" placeholder="Entrez votre mot de passe">
  <br>
  <br>
  Identifiant <input type='text' name="pseudo" placeholder="Entrez votre identifiant">
  <br>
  <br>
  <input type="submit" value="Créer">
</form>
</body>
</html>
