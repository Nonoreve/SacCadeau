<?php session_start(); ?>
<!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sackado : Partagez sans soucis</title>
    <link rel="stylesheet" href="./css/structurePage.css">
    <link rel="stylesheet" href="./css/pageListes.css">
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
        <div id='left-panel' class='is-active'>
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
                <h1>Mes Listes</h1>
                <a href="#">
                    <div class="btn-nouvelle-liste">
                        <img class="plus-icon" src="../ressources/plus-icon.png" alt="">
                        <p>Ajouter une liste</p>
                    </div>
                </a>
            </div>
            <div class="content-content">
                <table class="tableau-listes">
                    <!-- On inserera ici les listes présentes ajoutées dynamiquement-->
                    <!-- Ci-dessous, le modèle de base de présentation d'une liste -->
                    <tbody>
                        <tr>
                            <td>
                                <div class="case-liste">
                                    <h1 class="list-title">Liste Exemple</h1>
                                    <p class="list-description">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <table class="liste-cadeaux">
                                        <thead>
                                            <td>Les Cadeaux</td>
                                        </thead>
                                        <tbody class="list-table">
                                            <tr>
                                                <td>Cadeau Exemple 1</td>
                                            </tr>
                                            <tr>
                                                <td>Cadeau Exemple 2</td>
                                            </tr>
                                            <tr>
                                                <td>Cadeau Exemple 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="case-liste">
                                    <h1><?php

                                            echo "Liste Exemple"
                                        ?></h1>
                                    <p><?php echo "Decription: Lorem ipsum dolor sit amet" ?></p>
                                    <table class="liste-cadeaux">
                                        <thead>
                                            <td>Les Cadeaux</td>
                                        </thead>
                                        <tbody>
                                            <?php echo "<tr>
                                                <td>Cadeau Exemple 1</td>
                                            </tr>" ?>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                <div class="btn-nouvelle-liste">
                                    <img class="plus-icon" src="../ressources/plus-icon.png" alt="">
                                    <p>Ajouter une liste</p>
                                </div>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

    </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>

</html>
