<?php
  require_once("../data/Utilisateur/Membre.php");
  require_once("../data/connect.php");
  session_start();
  $idMembreActif = $_SESSION['MembreActif'];
  $membreActif = new Membre($idMembreActif, $co);

  function afficheInactif($idMembreActif, $co){
    $queryAfficheInactifs = "SELECT Utilisateur.IdUtilisateur, NomUtilisateur, PrenomUtilisateur FROM Utilisateur, Inactif WHERE Utilisateur.IdUtilisateur = Inactif.IdUtilisateur AND Inactif.IdUtilisateur_Membre = $idMembreActif";
    $result = mysqli_query($co, $queryAfficheInactifs);
      while($row = mysqli_fetch_array($result, MYSQLI_NUM) ){
        echo(" <tr>
                  <td>
                      <div class='inactif-cellule'>
                          <h3>MOI</h3>
                          <input type='radio' name='proprietaire' value='" . $_SESSION['MembreActif']."'>
                            <input type='text' name='actualName' value='" . $row[1] . "' style='display: none;'>
                            <input type='text' name='actualSurname' value='" . $row[2] . "' style='display: none;'>
                      </div>
                  </td>
              </tr>");
      echo(" <tr>
                <td>
                    <div class='inactif-cellule'>
                        <h3>". $row[1] . " " . $row[2] . "</h3>
                        <input type='radio' name='proprietaire' value='" . $row[0] ."'>
                          <input type='text' name='actualName' value='" . $row[1] . "' style='display: none;'>
                          <input type='text' name='actualSurname' value='" . $row[2] . "' style='display: none;'>
                    </div>
                </td>
            </tr>");
    }
}
