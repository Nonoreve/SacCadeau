<?php
	session_start();
	if(!isset($_SESSION['MembreActif'])){
		// session echue
		header("Location: ../vues/index.php");
	}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sackado : Partagez sans soucis</title>
    <link rel="stylesheet" href="./css/structurePage.css">
    <link rel="stylesheet" href="./css/primeAbord.css">
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
        <a href="../controleurs/deconnexion-control.php" class="lien-deconnexion"><button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Se déconnecter</button></a>
    </header>
    <div id='corps'>
      <div id='left-panel'>
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
        <h1>Commençons par le commencement...</h1>
        <div class="top-objectifs">
          <div class="intro-listes">
            <h2>Vos Listes</h2>
            <p>Elles determinent ce que vous voulez, ou plutôt ce que vous méritez</p>
            <a href='./pageListes.php'><button type="button" name="button" >Créez et/ou organisez vos listes</button></a>
          </div>
          <div class="intro-comptes">
            <h2>Vos Comptes</h2>
            <p>Le vôtre, mais aussi ceux de tous les utilisateurs inactifs que vous controlez.</p>
            <a href='./pageComptes.php'><button type="button" name="button" >Gérez vos comptes</button></a>
          </div>
          <div class="intro-groupes">
            <h2>Vos Groupes</h2>
            <p>Partagez, offrez et recevez avec vos amis, les groupes sont faits pour cela.</p>
            <a href='./pageMesGroupes.php'><button type="button" name="button">Gérez vos groupes</button></a>
          </div>
        </div>
        <div class="down-objectifs">
          <div class="intro-sackado">
            <h2>Mon Sackado</h2>
            <p> L'endroit ou se trouvent tous vos cadeaux, vous pouvez les lier à vos listes, ou à celles d'un de vos membres inactifs. Créez les cadeaux, ils seront automatiquement insérés dedans. Une salle du trésor en somme...</p>
            <a href='./ajoutCadeau.php'><button type="button" name="button">Créez votre nouveau cadeau</button></a>
            <a href='./pageSackado.php'><button type="button" name="button">Accédez à votre Sackado</button></a>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>
</html>
