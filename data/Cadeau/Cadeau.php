<?php
  class Cadeau {

    private $id, $nom, $description, $image, $lien, $idAcheteur, $concepteur;

    function __construct($idCadeau, $co) {
      $query = "SELECT NomCadeau, DescriptifCadeau, ImageCadeau, LienCadeau, IdMembreAcheteur, IdMembreCreateur FROM Cadeau WHERE IdCadeau=".$idCadeau;
      $result = mysqli_query($co, $query);
      if($result -> num_rows == 0) die("This gift does not exist");
      $row = $result->fetch_array(MYSQLI_NUM);
      $this -> id = $idCadeau;
      $this -> nom = $row[0];
      $this -> description = $row[1];
      $this -> image = $row[2];
      $this -> lien = $row[3];
      $this -> idAcheteur = $row[4];
      $this -> concepteur = $row[5];
    }

    function acheter($idAcheteur, $co) {
      $query = "CALL acheter(".$this -> id.", $idAcheteur)";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to acheter");
    }

    function supprimer($idProprietaire, $co) {
      $query = "CALL supprimerCadeau(".$this -> id.", $idProprietaire)";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to supprimerCadeau");
    }

    static function creerCadeau($nom, $description, $image, $lien, $login, $co) {
      $query = "CALL creerCadeau(\"$nom\", \"$description\", \"$image\", \"$lien\", \"$login\")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to creerCadeau");
    }

    function getId() {
      return $this -> id;
    }

    function getNom() {
      return $this -> nom;
    }

    function getDescription() {
      return $this -> description;
    }

    function getImage() {
      return $this -> image;
    }

    function getLien() {
      return $this -> lien;
    }

    function getIdAcheteur() {
      return $this -> idAcheteur;
    }

    function getConcepteur() {
      return $this -> concepteur;
    }

  }
  /*require_once("../connect.php");
  $test = new Cadeau(61, $co);
  printf ("Debug : [%s] %s : %s\n", $test -> getId(), $test -> getNom(), $test -> getDescription());
  $test -> supprimer(101, $co);
  Cadeau::creerCadeau("Butt Plug", "To enjoy your night", NULL, NULL, "toto", $co);*/
?>
