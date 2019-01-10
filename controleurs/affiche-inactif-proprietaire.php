<?php
  require_once("../data/Utilisateur/Membre.php");
  require_once("../data/connect.php");
  session_start();
  $idMembreActif = $_SESSION['MembreActif'];
  $membreActif = new Membre($idMembreActif, $co);

  function afficheInactif($idMembreActif, $co){
    $queryAfficheInactifs = "SELECT Utilisateur.IdUtilisateur, NomUtilisateur, PrenomUtilisateur FROM Utilisateur, Inactif WHERE Utilisateur.IdUtilisateur = Inactif.IdUtilisateur AND Inactif.IdUtilisateur_Membre = $idMembreActif";
    $result = mysqli_query($co, $queryAfficheInactifs);
    echo(" <tr>
    <td>
        <div class='inactif-cellule'>
            <label for='proprietaire'>Moi Même</label>
            <input type='radio' name='proprietaire' value='" . $_SESSION['MembreActif']."'>
        </div>
    </td>
</tr>");
    while($row = mysqli_fetch_array($result, MYSQLI_NUM) ){
      echo(" <tr>
                <td>
                    <div class='inactif-cellule'>
                        <label for='proprietaire'>". $row[1] . " " . $row[2] . "</label>
                        <input type='radio' name='proprietaire' value='" . $row[0] ."'>
                    </div>
                </td>
            </tr>");
    }
}
