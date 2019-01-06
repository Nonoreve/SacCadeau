<?php
    session_start();
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
						<?php
							//$query = "SELECT IdCadeau FROM Cadeau WHERE IdMembreCreateur=".$_SESSION['MembreActif'];
							$query = "SELECT IdCadeau FROM Cadeau WHERE IdMembreCreateur=4";// To test on virtual data
							$rawResult = mysqli_query($co, $query);
                            if($rawResult -> num_rows == 0) {
								echo "
						<tr>
							<td>
								<p>Vous n'avez pas encore de cadeaux. Crééz-en dès maintenant !</p>
							</td>
						</tr>";
							} else {
								while($result = $rawResult -> fetch_assoc()) {
									$cadeau = new Cadeau($result['IdCadeau'], $co);
									echo "
						<tr>
							<td>
								<div class=\"cadeau-element\">
									<h2 class=\"nomCadeau\">".$cadeau -> getNom()."</h2>
									<div class=\"cadeau-image\">
                                        <img class=\"cadeau-image\" src=\"".$cadeau -> getImage()."\">
                                    </div>
                                    <p class=\"descriptif-cadeau\">".$cadeau -> getDescription()."</p>
                                    <a href=\"".$cadeau -> getLien()."\">Lien pour acheter le cadeau</a>
								</div>
							</td>
						</tr>";
								}
							}
						?>
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