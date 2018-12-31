<?php
  class Liste {

    private $id, $nom, $proprietaire;

    function __construct($idListe, $co) {
      $query = "SELECT NomListe, IdUtilisateur FROM Liste WHERE IdListe=".$idListe;
      $result = mysqli_query($co, $query);
      if($result -> num_rows == 0) die("This list does not exist");
      $row = $result->fetch_array(MYSQLI_NUM);
      $this -> id = $idListe;
      $this -> nom = $row[0];
      $this -> proprietaire = $row[1];
    }

    function ajoutDansListe($idCadeau, $co) {
      $query = "CALL ajoutListe($idCadeau, ".$this -> id.")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to ajoutListe");
    }

    function supprimerDansListe($idCadeau, $idProprietaire, $co) {
      $query = "CALL supprimerCadeauDansListe($idCadeau, $idProprietaire, ".$this -> id.")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to supprimerListe");
    }

    static function creerListe($login, $nom, $co) {
      $query = "CALL creerListe(\"$login\", \"$nom\")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to creerListe");
    }

    function getId() {
      return $this -> id;
    }

    function getNom() {
      return $this -> nom;
    }

    function getProprietaire() {
      return $this -> proprietaire;
    }

  }
  /*require_once("../connect.php");
  $test = new Liste(1, $co);
  printf ("Debug : [%s] %s : %s\n", $test -> getId(), $test -> getNom(), $test -> getProprietaire());
  $test -> ajoutDansListe(1, $co);
  $test -> supprimerDansListe(1, 41, $co);
  Liste::creerListe("toto", "The Hell List", $co);*/
?>
