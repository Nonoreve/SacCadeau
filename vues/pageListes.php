<?php
    session_start();
    require_once("../data/connect.php");
    require_once("../data/Cadeau/Liste.php");
    require_once("../data/Cadeau/Cadeau.php");
?>
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
                                    <?php
                                        /*$query = "SELECT NomListe FROM Liste WHERE IdUtilisateur=1";//.$_SESSION['MembreActif'];
                                        $rawResult = mysqli_query($co, $query);
                                        $result = $rawResult -> fetch_assoc();
                                        echo "<h1>".$result['NomListe']."</h1>
                                            <table class=\"liste-cadeaux\">
                                                <thead>
                                                    <td>Les Cadeaux</td>
                                                </thead>
                                                <tbody>";
                                        $query = "SELECT Cadeau.NomCadeau NomCadeau FROM Cadeau NATURAL JOIN contient WHERE contient.IdListe=15";//.$_SESSION['MembreActif'];
                                        $rawResult = mysqli_query($co, $query);
                                        while($result = $rawResult -> fetch_assoc()) {
                                            echo "<tr>
                                                    <td>".$result['NomCadeau']."</td>
                                                </tr>";
                                        }
                                        echo "</tbody>
                                            </table>";*/
                                    ?>
                                </div>
                            </td>
                        </tr>
                        <?php
                            $query = "SELECT IdListe FROM Liste WHERE IdUtilisateur=1";//.$_SESSION['MembreActif'];
                            $rawResult = mysqli_query($co, $query);
                            $listes = Liste::fromResultToArray($rawResult, $co);
                            //var_dump($listes);
                            while($listes) {
                                $aList = $listes[1];
                                echo "
                        <tr>
                            <td>
                                <div class=\"case-liste\">
                                    <h1>".$aList -> getNom()."</h1>
                                    <table class=\"liste-cadeaux\">
                                        <thead>
                                            <td>Les Cadeaux</td>
                                        </thead>
                                        <tbody>";
                                /*$query = "SELECT IdCadeau FROM contient WHERE IdListe=".$aList -> getId();
                                $rawResult = mysqli_query($co, $query);
                                $cadeaux = Cadeau::fromResultToArray($rawResult, $co);
                                while($result = $rawResult -> fetch_array()) {
                                    $aGift = $cadeaux[$result['IdCadeau']];
                                    echo "<tr>
                                            <td>".$aGift -> getNom()."</td>
                                        </tr>";
                                }*/
                                echo "</tbody>
                                    </table>";
                            }
                        ?>
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
