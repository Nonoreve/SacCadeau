<?php
  require_once("../connect.php");
  require_once("Utilisateur.php");
  class Membre extends Utilisateur {

    private $mail, $login, $mdp;

    function __construct($idUtilisateur, $co) {
      parent::__construct($idUtilisateur, $co);
      $query = "SELECT MailMembre, LoginMembre, MotDePasseMembre FROM Membre WHERE Idutilisateur=".$idUtilisateur;
      $result = mysqli_query($co, $query);
      if($result -> num_rows == 0) die("This member does not exist");
      $row = $result->fetch_array(MYSQLI_NUM);
      $this -> mail = $row[0];
      $this -> login = $row[1];
      $this -> mdp = $row[2];
    }

    static function creerCompte($nom, $prenom, $mail, $login, $mdp, $co) {
      $query = "CALL creerCompte(\"$nom\", \"$prenom\", \"$mail\", \"$login\", \"$mdp\")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to creerCompte");
    }

    function getMail() {
      return $this -> mail;
    }

    function getLogin() {
      return $this -> login;
    }

    function getMdp() {
      return $this -> mdp;
    }

  }
  $test = new Membre(1, $co);
  //printf ("Debug : %s %s %s %s %s %s\n", $test -> getId(), $test -> getNom(), $test -> getPrenom(), $test -> getMail(), $test -> getLogin(), $test -> getMdp());
  Membre::creerCompte("The Devil", "Satan", "satan@mf.hell", "toto", "6664269", $co);
?>
