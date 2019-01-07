<?php
  require_once("../data/connect.php");
  $idUtilisateur = $_GET['id'];
  $idGroupe = $_GET['groupe'];

  $query = "CALL ajouterUtilisateurGroupe($idGroupe, $idUtilisateur)";
  echo $query;
  mysqli_query($co, $query);
  header("Location: ../vues/pageGroupes.php?groupe=".$idGroupe);


?>
