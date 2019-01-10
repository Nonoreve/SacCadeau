<?php
    require_once("../controleurs/affiche-inactif-proprietaire.php");
    require_once("../data/connect.php");
 ?>
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
        <h1>Créer une liste</h1>
        <form class="" action="../controleurs/creation-liste-control.php" method="post">
          <input type="text" name="nomListe" value="" placeholder="Nom de la liste" required>
          <br>
          <div class='comptesAcces'>
            <h2> Choisissez le compte à qui attribuer la liste</h2>
            <?php afficheInactif($_SESSION['MembreActif'], $co);?>
          </div>
          <input type="submit" value="Créer la liste">
        </form>
      </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>
</html>
