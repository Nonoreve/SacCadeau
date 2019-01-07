<?php
  require_once("../data/Utilisateur/Membre.php");
  require_once("../data/connect.php");
  session_start();
  $idMembreActif = $_SESSION['MembreActif'];
  $membreActif = new Membre($idMembreActif, $co);

  function afficheInactif($idMembreActif, $co){
    $queryAfficheInactifs = "SELECT NomUtilisateur, PrenomUtilisateur FROM Utilisateur, Inactif WHERE Utilisateur.IdUtilisateur = Inactif.IdUtilisateur AND Inactif.IdUtilisateur_Membre = $idMembreActif";
    $result = mysqli_query($co, $queryAfficheInactifs);
      while($row = mysqli_fetch_array($result, MYSQLI_NUM) ){
      echo(" <tr>
                <td>
                    <div class='inactif-cellule'>
                        <h1>". $row[0] . " " . $row[1] . "</h1>
                        <form class='modification-inactifs' action='../controleurs/modifier-inactif-control.php' method='post'>
                          <input type='text' name='new-inactif-name' value='". $row[0] . "'>
                          <input type='text' name='new-inactif-surname' value='" . $row[1] . "'>
                          <input type='text' name='actualName' value='" . $row[0] . "' style='display: none;'>
                          <input type='text' name='actualSurname' value='" . $row[1] . "' style='display: none;'>
                          <input type='submit' name='' value='Valider les changements'>
                        </form>
                    </div>
                </td>
            </tr>");
    }
}
?>
