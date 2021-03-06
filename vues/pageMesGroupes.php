<?php
	session_start();
    if(!isset($_SESSION['MembreActif'])) {
        // session echue
        header("Location: ../vues/index.php");
    }
	require_once("../data/connect.php");
	require_once("../data/Cadeau/Groupe.php");
?>
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
          <a href="../vues/primeAbord.php">
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
            </div>
            <div class="content-content">
                <table>
                    <?php
                        $query = "SELECT IdGroupe FROM appartient WHERE IdUtilisateur=".$_SESSION['MembreActif'];
                        //$query = "SELECT IdGroupe FROM Groupe WHERE IdUtilisateur=2";// To test on virtual data
						$rawResult = mysqli_query($co, $query);
						if($rawResult -> num_rows == 0) {
							echo "
                    <tr>
                        <td>Vous n'avez pas encore de groupe. Crééz-en un ou rejoignez-en un dès maintenant !</td>
                    </tr>";
                        } else {
                            while($result = $rawResult -> fetch_assoc()) {
								$groupe = new Groupe($result['IdGroupe'], $co);
								echo "
                    <tr>
                        <td><a href=\"../vues/pageGroupes.php?groupe=".$groupe -> getId()."\">".$groupe -> getNom()."</a></td>
                    </tr>";
							}
                        }
                    ?>
                    <tr>
                        <td>
                            <h1>Créez votre groupe</h1>
                            <form class="creation-form" action="../controleurs/creer-groupe-control.php" method="post">
                                <input type="text" name="nouveauNom" value="" placeholder="Nom du nouveau groupe" required>
                                <input type="submit" name="" value="Créer le nouveau groupe">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>

</html>
