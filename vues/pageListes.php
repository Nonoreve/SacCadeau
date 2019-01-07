<?php
    session_start();
    if(!isset($_SESSION['MembreActif'])){
        // session echue
        header("Location: ../vues/index.php");
    }
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
                    <tbody>
                        <?php
                            $query = "SELECT IdListe FROM Liste WHERE IdUtilisateur=".$_SESSION['MembreActif'];
                            //$query = "SELECT IdListe FROM Liste WHERE IdUtilisateur=1";// To test on virtual data
                            $rawResult = mysqli_query($co, $query);
                            if($rawResult -> num_rows == 0) {
                                echo "
                        <tr>
                            <td>
                                <div class=\"case-liste\">
                                    <p>Vous n'avez pas encore de liste. Crééz-en une dès maintenant !</p>
                                </div>
                            </td>
                        </tr>";
                            } else {
                                while($result = $rawResult -> fetch_assoc()) {
                                    $liste = new Liste($result['IdListe'], $co);
                                    echo "
                        <tr>
                            <td>
                                <div class=\"case-liste\">
                                    <h1>".$liste -> getNom()."</h1>
                                    <table class=\"liste-cadeaux\">
                                        <thead>
                                            <td>Les Cadeaux</td>
                                        </thead>
                                        <tbody>";
                                    $query = "SELECT IdCadeau FROM contient WHERE IdListe=".$liste -> getId();
                                    $rawResult2 = mysqli_query($co, $query);
                                    if($rawResult2 -> num_rows == 0) {
                                        echo "
                                            <tr>
                                                <td>Pas encore de cadeaux dans cette liste.</td>
                                            </tr>";
                                    } else {
                                        while($result = $rawResult2 -> fetch_assoc()) {
                                            $cadeau = new Cadeau($result['IdCadeau'], $co);
                                            echo "
                                            <tr>
                                                <td>".$cadeau -> getNom()."</td>
                                            </tr>";
                                        }
                                    }
                                    echo "
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>";
                                }
                            }
                        ?>
                        <tr>
                            <td>
                                <a href="../controleurs/liste-control.php">
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
