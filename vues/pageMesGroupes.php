<!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sackado : Partagez sans soucis</title>
    <link rel="stylesheet" href="./css/structurePage.css">
    <link rel="stylesheet" href="./css/pageMesGroupes.css">
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
          <a href="../controleurs/deconnexion-control.php" class="lien-deconnexion"><button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Se déconnecter</button></a>      </header>
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
            <div class="content-header">
                <h1>Mes Groupes</h1>
                <a href="#">
                    <div class="btn-nouveau-groupe">
                        <img class="plus-icon" src="../ressources/plus-icon.png" alt="">
                        <p>Créer un groupe</p>
                    </div>
                </a>
            </div>
            <div class="content-content">
                <table>
                  <!--Contenu a copier et ajouter dynamiquement -->
                    <tr>
                        <td><a href="#">MonGroupeExemple1</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>

</html>
