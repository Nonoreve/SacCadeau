<!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sackado : Partagez sans soucis</title>
    <link rel="stylesheet" href="./css/structurePage.css">
    <link rel="stylesheet" href="./css/ajoutCadeau.css">
</head>
<body>
    <header>
        <div class="menu-icon" onclick="toggleLeftPanel();">
            <div class="menu-icon-bar"></div>
            <div class="menu-icon-bar"></div>
            <div class="menu-icon-bar"></div>
        </div>
        <a href="../vues/primeAbord.html">
            <img src="../ressources/logo.png" alt="logo-sackado" class="sackado-icon">
        </a>
      <a href="../controleurs/deconnexion-control.php" class="lien-deconnexion"><button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Se déconnecter</button></a>
    </header>
    <div id='corps'>
      <div id='left-panel' class='is-active'>
          <a href="./pageSackado.php">Mon Sackado</a>
          <br>
          <a href="./pageListes.php">Mes Listes</a>
          <br>
          <a href="./pageMesGroupes.php">Mes Groupes</a>
          <br>
          <a href="./pageComptes.php">Mes Comptes</a>
          <br>
          <a href="#" class="help-link">Aide</a>
      </div>
      <div id='container'>
        <h1>Inviter par mail</h1>
        <!-- Envoi d'un mail fictif, dans la réalité, le mail doit rediriger sur une page de création de compte, puis il sera directement ajouté dans le groupe -->
        <p>Entrez ici l'adresse mail de la personne à inviter. Une fois celle-ci membre, vous pourrez l'inviter et la faire rejoindre votre groupe</p>
        <form class="" action="../controleurs/envoi-mail-control.php" method="post">
            <input type="email" name="mail" value="" placeholder="Adresse mail à inviter" required>
            <br>
            <input type="submit" value="Envoyer le mail">
        </form>
      </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>
</html>
</html>
