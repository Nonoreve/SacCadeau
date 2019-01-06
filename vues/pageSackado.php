<!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Sackado : Partagez sans soucis</title>
	<link rel="stylesheet" href="./css/structurePage.css">
	<link rel="stylesheet" href="./css/pageSackado.css">
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
				<h1>Mon Sackado</h1>
				<a href="#">
					<div class="btn-nouveau-groupe">
						<img class="plus-icon" src="../ressources/plus-icon.png" alt="">
						<p>Ajouter un cadeau</p>
					</div>
				</a>
			</div>
			<div class="content-content">
				<div class="sackado-display">
					<table>
						<!--Cellule exemple à copier -->
                        <tr>
							<td>
								<div class="cadeau-element">
									<h2 class="nomCadeau"><?php echo "Cadeau Exemple" ?></h2>
									<div class="cadeau-image">
                                        <img class="cadeau-image" src="<?php echo "https://s1.qwant.com/thumbr/0x0/b/f/c93c809d8f6d631e8bb689b87811f55767fba54e5bcb580bed8dd3fc1f4648/Cadeau-fete-des-meres-a-faire-soi-meme-un-pot-a-crayon.jpg?u=https%3A%2F%2Fresize-elle.ladmedia.fr%2Fs%2F138%2Fimg%2Fvar%2Fplain_site%2Fstorage%2Fimages%2Fmaman%2Fnews%2F20-idees-cadeaux-de-fete-des-meres-a-fabriquer-soi-meme%2Fcadeau-fete-des-meres-a-faire-soi-meme-un-pot-a-crayon%2F64600576-1-fre-FR%2FCadeau-fete-des-meres-a-faire-soi-meme-un-pot-a-crayon.jpg&q=0&b=1&p=0&a=1" ?>">
									</div>
									<p class="descriptif-cadeau"><?php echo "Description : Lorem ipsum dolor sir amet consectetur. Abemous paapam. Tagada, tagada, tsoin, tsoin, pouet, pouet." ?></p>
									<a href="<?php echo "#" ?>">Lien pour acheter le cadeau</a>
								</div>
							</td>
						</tr>
                        <tr>
							<td>
								<div class="cadeau-element">
									<?php
										//$query = "SELECT IdListe FROM Liste WHERE IdUtilisateur=".$_SESSION['MembreActif'];
										$query = "SELECT IdListe FROM Liste WHERE IdUtilisateur=1";// To test on virtual data
										$rawResult = mysqli_query($co, $query);
									?>
								</div>
							</td>
                        </tr>
						<tr>
							<td>
								<a href="#">
									<div class="btn-nouveau-groupe">
                                        <img class="plus-icon" src="../ressources/plus-icon.png" alt="+"><p>Ajouter un cadeau</p>
                                    </div>
								</a>
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
