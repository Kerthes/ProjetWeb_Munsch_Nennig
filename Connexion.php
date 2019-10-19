<?php
include 'Connexion_BDD.php';

//  Récupération de l'utilisateur et de son pass hashé
$req = $objPDO -> prepare("SELECT pseudo, motdepasse FROM nennig16u_projetweb.redacteur WHERE pseudo = :pseudo");

$req->bindValue('pseudo', $_POST['pseudo']);;

$resultat = $req->execute();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['motdepasse'], $resultat['motdepasse']);

if (!$resultat)
{
    echo '123Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['pseudo'] = $resultat['pseudo'];
              echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
