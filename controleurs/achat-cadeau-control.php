<?php
	session_start();
	if(!isset($_SESSION['MembreActif'])){
		// session echue
		header("Location: ../vues/index.php");
	}
	require_once("../data/connect.php");
	require_once("../data/Cadeau/Cadeau.php");
	if(isset($_GET['groupe'])) {
		if(isset($_GET['cadeau'])) {
			$cadeau = new Cadeau($_GET['cadeau'], $co);
			$cadeau -> acheter($_SESSION['MembreActif'], $co);
		}
		header("Location: ../vues/pageGroupes.php?groupe=".$_GET['groupe']);
	} else {
		header("Location: ../vues/pageMesGroupes.php");
	}
?>
