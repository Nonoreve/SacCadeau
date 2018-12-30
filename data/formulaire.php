<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1 id="haut"> Nouveau compte: formulaire d'inscription </h1>
  <form method="post" action="redirection.php">
    <label> Utilisateur: </label><br>
    <input type="text" name="login" value="" required><br><br>
    <label> Mot de passe: </label><br>
    <input type="text" name="mdp" value="" required><br><br>
    <input type="submit" value="Envoyer">
  </form>
</body>

</html>
