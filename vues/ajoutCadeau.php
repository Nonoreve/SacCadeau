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
        <a href="../vues/index.html">
            <img src="../ressources/logo.png" alt="logo-sackado" class="sackado-icon">
        </a>
        <button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Gerer mes comptes</button>
    </header>
    <div id='corps'>
      <div id='left-panel'>
          <a href="#">Mon Sackado</a>
          <br>
          <a href="#">Mes Listes</a>
          <br>
          <a href="#">Mes Groupes</a>
          <br>
          <a href="#">Mes Comptes</a>
          <br>
          <a href="#" class="help-link">Aide</a>
      </div>
      <div id='container'>
        <h1>Créez votre cadeau</h1>
        <form class="" action="index.php" method="post">
          <input type="text" name="" value="" placeholder="Intitulé du cadeau">
          <br>
          <input type="text" name="" value="" placeholder="Descriptif du cadeau">
          <br>
          <input type="text" name="" value="" placeholder="Lien d'achat de cadeau">
          <br>
          <input type="text" name="" value="" placeholder="Lien d'une image du cadeau">
          <br>
          <input type="submit" name="" value="Créer le cadeau">
        </form>
      </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>
</html>
