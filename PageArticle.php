<html>

<head>
  <title>Blog MUNSCH&NENNIG </title>
</head>

<body>
  <h3> Création d'un article <h3>
    <p>
      <form method="POST" action="AjoutArticle.php">
          Titre : <input type='text' name="titresujet" placeholder="Entrez le titre de l'article" required>
          <br/>
          <br/>
          Texte :
          <br/>
          <textarea type='text' name="textesujet" maxlength="255" cols="60" rows="10" required> </textarea>
          <br/>
          <br/>
        <p>
          <input type="submit" value="Poster">
      </form>
</body>

</html>
