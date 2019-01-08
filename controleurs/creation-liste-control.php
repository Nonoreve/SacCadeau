<?php
  require_once("../data/Utilisateur/Membre.php");
  require_once("../data/connect.php");

  $nomListe = $_POST['nomListe'];
  $proprio = $_POST['proprietaire'];

  $query = "CALL creerListe($proprio, '$nomListe')";
  echo $query;
  mysqli_query($co, $query);
  header("Location: ../vues/pageListes.php");


 ?>
