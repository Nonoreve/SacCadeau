<?php
  require_once("../connect.php");
  require_once("Utilisateur.php");
  class Inactif extends Utilisateur {

    private $idMembre;

    function __construct($idUtilisateur, $co) {
      parent::__construct($idUtilisateur, $co);
      $query = "SELECT IdUtilisateur_Membre FROM Inactif WHERE Idutilisateur=".$idUtilisateur;
      $result = mysqli_query($co, $query);
      if($result -> num_rows == 0) die("This inactif does not exist");
      $row = $result->fetch_array(MYSQLI_NUM);
      $this -> idMembre = $row[0];
    }

    static function creerInactif($idTuteur, $nom, $prenom, $co){
      $query = "CALL creerInactif(\"$idTuteur\", \"$nom\", \"$prenom\")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to creerInactif");
    }

    function getIdMembre() {
      return $this -> idMembre;
    }

  }
  $test = new Inactif(51, $co);
  printf ("Debug : %s %s \n", $test -> getId(), $test -> getIdMembre());
  Inactif::creerInactif(101, "Christmas", "Santa", $co);
?>
