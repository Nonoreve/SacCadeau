<?php

  require_once("../data/Utilisateur/Membre.php");
  require_once("../data/connect.php");
  session_start();
  $idMembreActif = $_SESSION['MembreActif'];
  $membreActif = new Membre($idMembreActif, $co);

  $name = $_POST['new-inactif-name'];
  $surname = $_POST['new-inactif-surname'];
  $actualName = $_POST['actualName'];
  $actualSurname = $_POST['actualSurname'];
  $query = "UPDATE Utilisateur SET NomUtilisateur = '$name', PrenomUtilisateur = '$surname' WHERE NomUtilisateur = '$actualName' AND PrenomUtilisateur = '$actualSurname'";
  echo($query);
  mysqli_query($co, $query);
  header("Location: ../vues/pageComptes.php");

 ?>
