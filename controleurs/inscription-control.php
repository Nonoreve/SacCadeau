<?php
  ini_set('display_errors', 1);
  require_once("../data/connect.php");
  require_once("../data/Utilisateur/Membre.php");

  if(!empty($_POST))
  {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail =  htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);

    $pseudo = mysqli_real_escape_string($co, $pseudo);
    $password = mysqli_real_escape_string($co, $password);
    $mail = mysqli_real_escape_string($co, $mail);


    $result = mysqli_query($co, "SELECT EXISTS(SELECT 1 FROM Membre WHERE LoginMembre = '$pseudo')");
    $resultat = mysqli_fetch_row($result);

    if(empty($mail) OR !filter_var($mail, FILTER_VALIDATE_EMAIL)){
      $errors['mail'] = "L'email entré n'est pas valide";
    } elseif(empty($pseudo)){
      $errors['pseudo'] = "Le pseudo ne peut être vide";
    } elseif($resultat[0] == 1){
      $errors['pseudo'] = "Le pseudo existe déjà, Veuillez en choisir un autre";
    }
    elseif(empty($password)){
      $errors['password'] = "Le mot de passe ne peut être vide";
    } else {

      $nom = mysqli_real_escape_string($co, htmlspecialchars($_POST['nom']));
      $prenom = mysqli_real_escape_string($co, htmlspecialchars($_POST['prenom']));
      $mail = $_POST['mail'];
      $pseudo = $_POST['pseudo'];
      $password = $_POST['password'];

      //TODO : MySql : Correction : creerCompte doit prendre un max pour continuer de fonctionner en cas de prenom et nom multiple
      $idMembre = Membre::creerCompte($nom, $prenom, $mail, $pseudo, $password, $co);
      $nouveauMembre = new Membre($idMembre, $co);
      session_start();
      $_SESSION['MembreActif'] = $nouveauMembre -> getId();
      header("Location: ../vues/primeAbord.html");
    }

    include("../vues/index.php");
}

 ?>
