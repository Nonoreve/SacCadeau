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
