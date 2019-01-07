<?php
  require_once("../data/Cadeau/Liste.php");
  require_once("../data/Cadeau/Cadeau.php");
  require_once("../data/connect.php");

  $idCadeau = $_GET['idCadeau'];
  $idListe = $_GET['idListe'];

  $monNouveauCadeau = new Cadeau($idCadeau, $co);
  $maListe = new Liste($idListe, $co);

  $maListe->ajoutDansListe($idCadeau, $co);
  header("Location: ../vues/pageListes.php ")
 ?>
