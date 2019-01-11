<?php
  require_once("../data/Utilisateur/Membre.php");
  require_once("../data/connect.php");
  require_once("../data/Cadeau/Liste.php");

  $nomListe = $_POST['nomListe'];
  $proprio = $_POST['proprietaire'];

  Liste::creerListe($proprio, $nomListe, $co);
  header("Location: ../vues/pageListes.php");


 ?>
