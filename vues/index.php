<?php
    function show_error($key)
    {
      global $errors; //Récupère la variable $errors dans la portée globale
      return !empty($errors[$key]) ? '<div class="error">'. $errors[$key] .'</div>' : '';
    }
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<!--TODO : Correction : creerCompte doit prendre un max pour continuer de fonctionner en cas de prenom et nom multiple -->
<!--TODO : fix creerGroupe : l'utilisateur doit appartenir au groupe qu'il crée -->
<head>
    <meta charset="utf-8">
    <title>Sackado : Partagez sans soucis</title>
    <link rel="stylesheet" href="../vues/css/master.css">
</head>
<script type="text/javascript">
  function switchInscConn(){
    document.getElementById("inscription-part").classList.toggle("mode-inscription");
    document.getElementById("connexion-part").classList.toggle("mode-inscription");

    document.getElementById("connexion-part").classList.toggle("mode-connexion");
    document.getElementById("inscription-part").classList.toggle("mode-connexion");
  }
</script>
<body>
    <div class="container">
        <div id="left-part">
            <div class="left-header">
                <a href="../vues/index.html">
                    <img src="../ressources/logo.png" alt="logo-sackado" class="sackado-icon">
                </a>
                <a href="" class="lienResp">Se connecter</a>
                <a href="#" class="lienResp">Télecharger</a>
            </div>
            <div class="left-content">
                <h1>Offrez sans limite</h1>
                <p class="p1">Arretez de vous prendre la tête, Sackado offre un moyen simple et efficace d'organiser les achats groupés de cadeaux.</p>
                <button type="button" class="btn-inscription"  onclick='document.getElementById("inscription-part").classList.toggle("resp-affiche-inscription"); document.getElementById("left-part").classList.toggle("resp-affiche-inscription");'>S'inscrire maintenant</button>
                <p class="possibilite">Découvrez l'ensemble de vos possibilités : </p>
            </div>
        </div>
        <div id="inscription-part" class="is-active  mode-inscription">
            <div class="inscription-header">
                <a href="#" onclick="switchInscConn();">Se connecter</a>
                <a href="#">Télecharger</a>
            </div>
            <div class="inscription-content">
                <h1 class="titreDroite">Inscrivez-vous <br><em class="optionnel">ou <a href="#" onclick="switchInscConn();">Connectez-vous</a></em></h1>
                <form id="formInfos" action="../controleurs/inscription-control.php" method="post">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <span class="border"></span>
                    <br>
                    <input type="text" name="prenom" placeholder="Prenom" required>
                    <span class="border"></span>
                    <br>
                    <input type="text" name="mail" placeholder="Adresse email" required>
                    <span class="border"></span>
                    <br>
                    <input type="text" name="pseudo" placeholder="Pseudo" required>
                    <span class="border"></span>
                    <br>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <span class="border"></span>
                    <br>
                    <input type="checkbox" name="conditions" required>
                    <label for="conditions">Acceptez les conditions d'utilisation</label>
                    <br>

                    <span class="erreur"><?php echo(show_error('mail'));?></span>
                    <span class="erreur"><?php echo(show_error('pseudo'));?></span>
                    <span class="erreur"><?php echo(show_error('password'));?></span>
                    <br>
                    <input type="submit" name="s'inscrire" value="S'inscrire">
                </form>
            </div>
        </div>
        <div id="connexion-part" class="is-active mode-inscription">
          <div class="inscription-header">
              <a href="#" onclick="switchInscConn();">S'inscrire</a>
              <a href="#">Télecharger</a>
          </div>
          <div class="inscription-content">
              <h1 class="titreDroite">Connectez-vous <br><em class="optionnel">ou <a href="#" onclick="switchInscConn();">Inscrivez-vous</a></em></h1>
              <form id="formConnexion" action="../controleurs/connexion-control.php" method="post">
                  <input type="text" name="pseudo" placeholder="Pseudo">
                  <span class="border"></span>
                  <br>
                  <input type="password" name="password" placeholder="Mot de passe">
                  <span class="border"></span>
                  <br>
                  <span class="erreur"><?php echo(show_error('connect'));?></span>
                  <br>
                  <input type="submit" name="connecter" value="Se connecter">
              </form>
          </div>
        </div>
    </div>
</body>

</html>
