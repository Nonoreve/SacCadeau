<?php
  require_once("../data/connect.php");
  require_once("../data/Cadeau/Groupe.php");
	session_start();
	if(!isset($_SESSION['MembreActif'])){
		// session echue
		header("Location: ../vues/index.php");
	}
  $nouveauNom = $_POST['nouveauNom'];
  $idCreateur = $_SESSION['MembreActif'];
  $query = "CALL creerGroupe('$nouveauNom', $idCreateur)";
  echo($query);
  mysqli_query($co, $query);
  header("location: ../vues/pageMesGroupes.php");
 ?>
