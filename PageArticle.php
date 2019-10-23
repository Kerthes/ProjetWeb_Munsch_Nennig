<html>

<head>
  <title>Blog MUNSCH&NENNIG </title>
</head>

<body>
  <h3> Création d'un article <h3>
    <p>
      <form method="POST" action="AjoutArticle.php">
          Titre : <input type='text' name="titre" placeholder="Entrez le titre de l'article">
          <br>
          <br>
          Texte :
          <br>
          <textarea type='text' name="text" maxlength="255" cols="60" rows="10"> </textarea>
          <br>
          <br>
        <p>
          <input type="submit" value="Poster">
      </form>
</body>

</html>
