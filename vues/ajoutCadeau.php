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
        <button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Se déconnecter</button>
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
        <h1>Créez votre cadeau</h1>
        <form class="" action="../controleurs/creation-cadeau-control.php" method="post">
          <input type="text" name="NomCadeau" value="" placeholder="Intitulé du cadeau">
          <br>
          <input type="text" name="DescCadeau" value="" placeholder="Descriptif du cadeau">
          <br>
          <input type="text" name="LienCadeau" value="" placeholder="Lien d'achat de cadeau">
          <br>
          <input type="text" name="ImageCadeau" value="" placeholder="Lien d'une image du cadeau">
          <br>
          <input type="submit" value="Créer le cadeau">
        </form>
      </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>
</html>
