<?php
  require_once("../data/Utilisateur/Membre.php");
  require_once("../data/connect.php");
  session_start();
  $idMembreActif = $_SESSION['MembreActif'];
  $membreActif = new Membre($idMembreActif, $co);

  $name = $_POST['new-inactif-name'];
  $surname = $_POST['new-inactif-surname'];
  $query = "CALL creerInactif(\"$idMembreActif\", \"$name\", \"$surname\")";
  mysqli_query($co, $query);
  header("Location: ../vues/pageComptes.php");
 ?>
