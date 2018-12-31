<?php
  class Utilisateur {

    private $id, $nom, $prenom;

    function __construct($idUtilisateur, $co) {
      $query = "SELECT NomUtilisateur, PrenomUtilisateur FROM Utilisateur WHERE Idutilisateur=".$idUtilisateur;
      $result = mysqli_query($co, $query);
      if($result -> num_rows == 0) die("This user does not exist");
      $row = $result->fetch_array(MYSQLI_NUM);
      $this -> id = $idUtilisateur;
      $this -> nom = $row[0];
      $this -> prenom = $row[1];
    }

    function getId() {
      return $this -> id;
    }

    function getNom() {
      return $this -> nom;
    }

    function getPrenom() {
      return $this -> prenom;
    }

  }
  /*require_once("../connect.php");
  $test = new Utilisateur(1, $co);
  printf ("Debug : [%s] %s : %s\n", $test -> getId(), $test -> getNom(), $test -> getPrenom());*/
?>
