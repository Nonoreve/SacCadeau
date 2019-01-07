<?php
	session_start();
	if(!isset($_SESSION['MembreActif'])){
		// session echue
		header("Location: ../vues/index.php");
	}
	require_once("../data/connect.php");
	require_once("../data/Cadeau/Cadeau.php");
	require_once("../data/Utilisateur/Membre.php");
	$nomCadeau = htmlspecialchars($_POST['NomCadeau']);
	$descCadeau = htmlspecialchars($_POST['DescCadeau']);
	$lienCadeau = htmlspecialchars($_POST['LienCadeau']);
	$imageCadeau = htmlspecialchars($_POST['ImageCadeau']);
	$nomCadeau = mysqli_real_escape_string($co, $nomCadeau);
	$descCadeau = mysqli_real_escape_string($co, $descCadeau);
	$lienCadeau = mysqli_real_escape_string($co, $lienCadeau);
	$imageCadeau = mysqli_real_escape_string($co, $imageCadeau);
	$user = new Membre($_SESSION['MembreActif'], $co);
	Cadeau::creerCadeau($nomCadeau, $descCadeau, $imageCadeau, $lienCadeau, $user -> getLogin(), $co);
	header("Location: ../vues/pageSackado.php");
?>
