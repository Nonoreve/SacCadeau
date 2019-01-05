<?php
  class Groupe {

    private $id, $nom, $admin;

    function __construct($idGroupe, $co) {
      $query = "SELECT NomGroupe, IdUtilisateur FROM Groupe WHERE IdGroupe=".$idGroupe;
      $result = mysqli_query($co, $query);
      if($result -> num_rows == 0) die("This group does not exist");
      $row = $result->fetch_array(MYSQLI_NUM);
      $this -> id = $idGroupe;
      $this -> nom = $row[0];
      $this -> admin = $row[1];
    }

    function ajoutListeDansGroupe($idListe, $co) {
      $query = "CALL ajouterListeAGroupe($idListe, ".$this -> id.")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to ajouterListeAGroupe");
    }

    function ajoutUtilisateurDansGroupe($idUtilisateur, $co) {
      $query = "CALL ajouterUtilisateurGroupe(".$this -> id.", $idUtilisateur)";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to ajouterUtilisateurGroupe");
    }

    function retirerMembreGroupe($idARetirer, $idVolontaire, $co) {
      $query = "CALL retirerMembreGroupe($idARetirer, $idVolontaire, ".$this -> id.")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to retirerMembreGroupe");
    }

    function renommerGroupe($newName, $idVolontaire, $co) {
      $query = "CALL renommerGroupe(".$this -> id.", $idVolontaire, \"$newName\")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to renommerGroupe");
    }

    function supprimerGroupe($idCreateur, $co) {
      $query = "CALL supprimerGroupe($idCreateur, ".$this -> id.")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to supprimerGroupe");
    }

    static function creerGroupe($nom, $idAdmin, $co) {
      $query = "CALL creerGroupe(\"$nom\", \"$idAdmin\")";
      if(!mysqli_query($co, $query)) die("Error while processing CALL to creerGroupe");
    }

    function getId() {
      return $this -> id;
    }

    function getNom() {
      return $this -> nom;
    }

    function getAdmin() {
      return $this -> admin;
    }

  }
  /*require_once("../connect.php");
  $test = new Groupe(1, $co);
  printf ("Debug : [%s] %s : %s\n", $test -> getId(), $test -> getNom(), $test -> getAdmin());
  $test -> ajoutListeDansGroupe(42, $co);
  $test -> ajoutUtilisateurDansGroupe(69, $co);
  $test -> retirerMembreGroupe(69, 69, $co);
  $test -> renommerGroupe("Maitresses", 3, $co);
  Groupe::creerGroupe("Club de Tricot", 101, $co);
  $test -> supprimerGroupe(3, $co);*/
?>
