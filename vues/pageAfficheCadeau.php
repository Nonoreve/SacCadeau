<?php
	session_start();
	if(!isset($_SESSION['MembreActif'])){
		// session echue
		header("Location: ../vues/index.php");
	}
	require_once("../data/connect.php");
	require_once("../data/Cadeau/Cadeau.php");
?>
<!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
		<meta charset="utf-8">
		<title>Sackado : Partagez sans soucis</title>
		<link rel="stylesheet" href="./css/structurePage.css">
		<link rel="stylesheet" href="./css/primeAbord.css">
		<link rel="stylesheet" href="./css/pageAfficheCadeau.css">
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
				<div class="cadeau-element">
					<?php
						if(isset($_GET['groupe'])){
							if(isset($_GET['cadeau'])){
								$cadeau = new Cadeau($_GET['cadeau'], $co);
								echo "
					<h2 class='nomCadeau'>".$cadeau -> getNom()."</h2>
					<div class='cadeau-image'>
						<img class='cadeau-image' src='".$cadeau -> getImage()."'>
					</div>
					<p class='descriptif-cadeau'>".$cadeau -> getDescription()."</p>
					<a href='".$cadeau -> getLien()."'>Lien pour acheter le cadeau</a>
					<br>
					<a href='../controleurs/achat-cadeau-control.php?cadeau=".$cadeau -> getId()."&groupe=".$_GET['groupe']."'>
					<button type='button' name='button' >Je lui achete ce cadeau !</button></a>";
							} else {
								header("Location: ../vues/pageGroupes.php?groupe=".$_GET['groupe']);
							}
						} else {
							header("Location: ../vues/pageMesGroupes.php");
						}
					?>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>
</html>
