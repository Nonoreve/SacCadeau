<?php
  require_once("../controleurs/affichage-comptes-control.php");
 ?>
<!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sackado : Partagez sans soucis</title>
    <link rel="stylesheet" href="./css/structurePage.css">
    <link rel="stylesheet" href="./css/pageComptes.css">
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
        <a href="../controleurs/deconnexion-control.php" class="lien-deconnexion"><button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Se déconnecter</button></a>    </header>
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
            <div class="partie-compte-propre">
                <h1>Votre Compte</h1>
                <p>Vous pouvez modifier vos informations personnelles à votre gré</p>
                <form class="form-modif-compte" action="index.html" method="post">
                    <div class="grid-inputs">
                        <input type="text" name="new-name" value="<?php echo($membreActif->getNom()); ?>" placeholder="Nouveau nom">
                        <input type="text" name="new-firstName" value="<?php echo($membreActif->getPrenom()); ?>" placeholder="Nouveau prénom">
                        <input type="text" name="new-pseudo" value="<?php echo($membreActif->getLogin()); ?>" placeholder="Nouveau pseudo">
                        <input type="text" name="new-email" value="<?php echo($membreActif->getMail()); ?>" placeholder="Nouvelle adresse eMail">
                        <input type="text" name="new-password" value="<?php echo($membreActif->getMdp()); ?>" placeholder = "Nouveau mot de passe">
                        <input type="submit" name="" value="Valider les changements">
                    </div>
                </form>
            </div>
            <div class="partie-inactifs">
                <div class="partie-inactifs-header">
                    <h1>Vos Inactifs</h1>
                    <p>Les comptes d'inactifs sont des comptes crées pour les personnes n'ayant pas accès au site, pour une surprise par exemple. Ici vous pouvez en créer ou en modifier. </p>
                </div>
                <div class="partie-inactifs-liste">
                    <table>
                      <!-- A ajouter dynamiquement pour chaque inactif de ce membre -->
                      <?php
                        afficheInactif($idMembreActif, $co);
                       ?>

                        <tr>
                            <td>
                              <div class="inactif-cellule">
                                <h1>Ajouter un Inactif</h1>
                                <form class="modification-inactifs" action="../controleurs/ajout-inactif-control.php" method="post">
                                  <input type="text" name="new-inactif-name" value="" placeholder="Nouveau nom">
                                  <input type="text" name="new-inactif-surname" value="" placeholder="Nouveau prénom">
                                  <input type="submit" name="" value="Valider les changements">
                                </form>
                              </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>

</html>
