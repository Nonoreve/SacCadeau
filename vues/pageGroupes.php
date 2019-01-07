<?php
		session_start();
		if(!isset($_SESSION['MembreActif'])){
				// session echue
				header("Location: ../vues/index.php");
		}
		require_once("../data/connect.php");
		require_once("../data/Cadeau/Liste.php");
		require_once("../data/Cadeau/Cadeau.php");
		require_once("../data/Utilisateur/Utilisateur.php");
?>
<!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
		<meta charset="utf-8">
		<title>Sackado : Partagez sans soucis</title>
		<link rel="stylesheet" href="./css/structurePage.css">
		<link rel="stylesheet" href="./css/pageGroupes.css">
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
						<h1>Groupe Exemple 1</h1>
						<a href="#">
								<div class="btn-nouveau-groupe">
										<img class="plus-icon" src="../ressources/plus-icon.png" alt="">
										<p>Inviter un membre</p>
								</div>
						</a>
				</div>
				<div class="content-content">
					<div class="group-display">
							<table>
								<!--Cellule exemple à copier -->
								<tr>
									<td>
										<h1>Liste du membre exemple 1</h1>
										<form class="form-notif-achat" action="index.html" method="post">

											<label for="cadeau1">Cadeau Exemple 1</label>
											<input type="checkbox" name="cadeau1" value="">

											<input type="submit" name="validate" value="Valider les changements">
										</form>
									</td>
								</tr>
								<?php
									$query = "SELECT IdListe FROM consulte WHERE IdGroupe=".$_GET['groupe'];// use of POST would be better
									//$query = "SELECT IdListe FROM consulte WHERE IdGroupe=1";// To test on virtual data
									$rawResult = mysqli_query($co, $query);
									if($rawResult -> num_rows == 0) {
										echo "
								<tr>
									<td>
										<p>Ce groupe est vide. Invitez un membre dès maintenant !</p>
									</td>
								</tr>";
									} else {
										while($result = $rawResult -> fetch_assoc()) {
											$liste = new Liste($result['IdListe'], $co);
											$proprietaire = new Utilisateur($liste -> getProprietaire(), $co);
											echo "
								<tr>
									<td>
										<h1>".$liste -> getNom()." de ".$proprietaire -> getNom()."</h1>
										<form class=\"form-notif-achat\" action=\"index.html\" method=\"post\">";
											$query = "SELECT IdCadeau FROM contient WHERE IdListe=".$liste -> getId();
											$rawResult2 = mysqli_query($co, $query);
											if($rawResult2 -> num_rows == 0) {
												echo "<label>Pas encore de cadeaux dans cette liste.</label>";
											} else {
												while($result = $rawResult2 -> fetch_assoc()) {
													$cadeau = new Cadeau($result['IdCadeau'], $co);
													echo "
											<label for=\"cadeau".$cadeau -> getId()."\">".$cadeau -> getNom()."</label>
											<input type=\"checkbox\" name=\"cadeau".$cadeau -> getId()."\" value=\"\">";
												}
											}
											echo "
											<input type=\"submit\" name=\"validate\" value=\"Valider les changements\">
										</form>
									</td>
								</tr>";
										}
									}
								?>
								<tr>
									<td>
										<a href="#">
												<div class="btn-nouveau-groupe">
														<img class="plus-icon" src="../ressources/plus-icon.png" alt="">
														<p>Inviter un membre</p>
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
