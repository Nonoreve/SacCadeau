<?php
	session_start();
  if(!isset($_SESSION['MembreActif'])){
		// session echue
		header("Location: ../vues/index.php");
  }
	require_once("../data/connect.php");
	require_once("../data/Cadeau/Cadeau.php");
  if(!isset($_GET['idListe'])) {
		header("Location: ../vues/pageSackado.php");
	}
  $idListe = $_GET['idListe'];
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
		<a href="../vues/primeAbord.php">
			<img src="../ressources/logo.png" alt="logo-sackado" class="sackado-icon">
		</a>
	<a href="../controleurs/deconnexion-control.php" class="lien-deconnexion"><button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Se déconnecter</button></a>
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
				<h1>Ajouter un cadeau</h1>
				<a href="../vues/ajoutCadeau.php">
					<div class="btn-nouveau-groupe">
						<img class="plus-icon" src="../ressources/plus-icon.png" alt="">
						<p>Créer un cadeau</p>
					</div>
				</a>
			</div>
			<div class="content-content">
				<div class="sackado-display">
					<table>
						<?php
							$query = "SELECT IdCadeau FROM Cadeau WHERE IdMembreCreateur=".$_SESSION['MembreActif'];
							//$query = "SELECT IdCadeau FROM Cadeau WHERE IdMembreCreateur=4";// To test on virtual data
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
				  $idCadeau = $cadeau->getId();
				  $query = "SELECT EXISTS(SELECT 1 FROM contient WHERE IdListe = $idListe AND IdCadeau = $idCadeau)";
				  $result = mysqli_query($co, $query);
				  $resultat = mysqli_fetch_row($result);

				  if($resultat[0] == 0){
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
					<a href='../controleurs/ajout-cadeau-liste-control.php?idListe=".$idListe."&idCadeau=".$cadeau->getId()."'>Ajouter ce cadeau à la liste</a>
  								</div>
  							</td>
  						</tr>";
			}
								}
							}
						?>
						<tr>
							<td>
								<a href="../vues/ajoutCadeau.php">
									<div class="btn-nouveau-groupe">
										<img class="plus-icon" src="../ressources/plus-icon.png" alt="+"><p>Créer un cadeau</p>
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
