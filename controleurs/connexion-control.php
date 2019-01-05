<?php
  require_once("../data/connect.php");
  require_once("../data/Utilisateur/Membre.php");
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mdp = htmlspecialchars($_POST['password']);

  $pseudo = mysqli_real_escape_string($co, $pseudo);
  $mdp = mysqli_real_escape_string($co, $mdp);

  $query = "SELECT EXISTS(SELECT 1 FROM Membre WHERE LoginMembre = '$pseudo' AND MotDePasseMembre = '$mdp')";

  $result = mysqli_query($co, $query);
  $resultat = mysqli_fetch_row($result);

  if($resultat[0] == 0){
    $errors['connect'] = "Le pseudo ou le mot de passe est erroné";
  } else {
    $result = mysqli_query($co, "SELECT IdUtilisateur FROM Membre WHERE LoginMembre = '$pseudo' AND MotDePasseMembre = '$mdp'");
    $resultat = mysqli_fetch_row($result);
    $nouveauMembre = new Membre($resultat[0], $co);
    header("Location: ../vues/primeAbord.html");
  }

  include("../vues/index.php");
 ?>
