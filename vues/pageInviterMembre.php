<?php
		session_start();
		if(!isset($_SESSION['MembreActif'])){
				// session echue
				header("Location: ../vues/index.php");
		}
		require_once("../data/connect.php");
		require_once("../data/Cadeau/Liste.php");
		require_once("../data/Cadeau/Cadeau.php");
		require_once("../data/Cadeau/Groupe.php");
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
      <a href="../vues/primeAbord.html">
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
					<?php
						if(isset($_GET['groupe'])){
							$groupe = new Groupe($_GET['groupe'], $co);
							$query = "SELECT IdUtilisateur FROM Utilisateur";
							$rawResult = mysqli_query($co, $query);
							echo "
						<h1>Inviter un membre à rejoindre ".$groupe -> getNom()."</h1>
				</div>
				<div class=\"content-content\">
					<div class=\"group-display\">
							<table>";
								while($result = $rawResult -> fetch_assoc()) {
									$proprietaire = new Utilisateur($result['IdUtilisateur'], $co);
									echo "
								<tr>
									<td>
                      <a href='../controleurs/inviterUtilisateur-control.php?id=".$proprietaire -> getId()."&groupe=".$groupe -> getId()."'>
										      <h1>".$proprietaire -> getNom()." ".$proprietaire -> getPrenom()."</h1>
                      </a>";
									echo "
									</td>
								</tr>";
							}
						} else {
							header("Location: ../vues/pageMesGroupes.php");
						}
					?>
								<tr>
									<td>
										<a href="#">
												<div class="btn-nouveau-groupe">
														<img class="plus-icon" src="../ressources/plus-icon.png" alt="">
														<p>Inviter une personne à vous rejoindre sur Sackado par eMail</p>
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
