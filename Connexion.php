<?php
include 'Connexion_BDD.php';

$req = $objPDO -> prepare("select * FROM nennig16u_projetweb.redacteur WHERE pseudo = :pseudo");

$req->bindValue('pseudo', $_POST['pseudo']);

$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$testmdp = password_verify($_POST['motdepasse'], $resultat['motdepasse']);

echo "$resultat['motdepasse']";
echo "$_POST['motdepasse']";

if (!$resultat)
{
    echo '123Mauvais identifiant ou mot de passe !';
}
else
{
    if ($testmdp) {
        session_start();
        $_SESSION['pseudo'] = $resultat['pseudo'];
        $_SESSION['id'] = $resultat['idredacteur'];
              echo 'Vous êtes connecté !';
    }
    else {
        echo 'plein le  cul du Mauvais identifiant ou mot de passe !';
    }
}
