 <!DOCTYPE html>
<!-- Structure de toutes les pages de l'application, à copier coller-->
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sackado : Partagez sans soucis</title>
    <link rel="stylesheet" href="./css/structurePage.css">
    <link rel="stylesheet" href="./css/pageGroupes.css">
</head>
<body>
    <header>
        <div class="menu-icon" onclick="toggleLeftPanel();">
            <div class="menu-icon-bar"></div>
            <div class="menu-icon-bar"></div>
            <div class="menu-icon-bar"></div>
        </div>
        <a href="../vues/index.html">
            <img src="../ressources/logo.png" alt="logo-sackado" class="sackado-icon">
        </a>
        <button type="button" name="btn-gestionComptes" class="btn-gestionComptes">Gerer mes comptes</button>
    </header>
    <div id='corps'>
      <div id='left-panel'>
          <a href="#">Mon Sackado</a>
          <br>
          <a href="#">Mes Listes</a>
          <br>
          <a href="#">Mes Groupes</a>
          <br>
          <a href="#">Mes Comptes</a>
          <br>
          <a href="#" class="help-link">Aide</a>
      </div>
      <div id='container'>
        <div class="content-header">
            <h1>Groupe Exemple 1</h1>
            <a href="#">
                <div class="btn-nouveau-groupe">
                    <img class="plus-icon" src="../ressources/plus-icon.png" alt="">
                    <p>Inviter un membre</p>
                </div>
            </a>
        </div>
        <div class="content-content">
          <div class="group-display">
              <table>
                <!--Cellule exemple à copier -->
                <tr>
                  <td>
                    <h1>Liste du membre exemple 1</h1>
                    <form class="form-notif-achat" action="index.html" method="post">
                      <label for="cadeau1">Cadeau Exemple 1</label>
                      <input type="checkbox" name="cadeau1" value="">
                      <label for="cadeau2">Cadeau Exemple 2</label>
                      <input type="checkbox" name="cadeau2" value="">
                      <label for="cadeau3">Cadeau Exemple 3</label>
                      <input type="checkbox" name="cadeau3" value="">
                      <label for="cadeau4">Cadeau Exemple 4</label>
                      <input type="checkbox" name="cadeau4" value="">
                      <label for="cadeau5">Cadeau Exemple 5</label>
                      <input type="checkbox" name="cadeau5" value="">
                      <input type="submit" name="validate" value="Valider les changements">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h1>Liste du membre exemple 1</h1>
                    <form class="form-notif-achat" action="index.html" method="post">
                      <label for="cadeau1">Cadeau Exemple 1</label>
                      <input type="checkbox" name="cadeau1" value="">
                      <label for="cadeau2">Cadeau Exemple 2</label>
                      <input type="checkbox" name="cadeau2" value="">
                      <label for="cadeau3">Cadeau Exemple 3</label>
                      <input type="checkbox" name="cadeau3" value="">
                      <label for="cadeau4">Cadeau Exemple 4</label>
                      <input type="checkbox" name="cadeau4" value="">
                      <label for="cadeau5">Cadeau Exemple 5</label>
                      <input type="checkbox" name="cadeau5" value="">
                      <input type="submit" name="validate" value="Valider les changements">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h1>Liste du membre exemple 1</h1>
                    <form class="form-notif-achat" action="index.html" method="post">
                      <label for="cadeau1">Cadeau Exemple 1</label>
                      <input type="checkbox" name="cadeau1" value="">
                      <label for="cadeau2">Cadeau Exemple 2</label>
                      <input type="checkbox" name="cadeau2" value="">
                      <label for="cadeau3">Cadeau Exemple 3</label>
                      <input type="checkbox" name="cadeau3" value="">
                      <label for="cadeau4">Cadeau Exemple 4</label>
                      <input type="checkbox" name="cadeau4" value="">
                      <label for="cadeau5">Cadeau Exemple 5</label>
                      <input type="checkbox" name="cadeau5" value="">
                      <input type="submit" name="validate" value="Valider les changements">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h1>Liste du membre exemple 1</h1>
                    <form class="form-notif-achat" action="index.html" method="post">
                      <label for="cadeau1">Cadeau Exemple 1</label>
                      <input type="checkbox" name="cadeau1" value="">
                      <label for="cadeau2">Cadeau Exemple 2</label>
                      <input type="checkbox" name="cadeau2" value="">
                      <label for="cadeau3">Cadeau Exemple 3</label>
                      <input type="checkbox" name="cadeau3" value="">
                      <label for="cadeau4">Cadeau Exemple 4</label>
                      <input type="checkbox" name="cadeau4" value="">
                      <label for="cadeau5">Cadeau Exemple 5</label>
                      <input type="checkbox" name="cadeau5" value="">
                      <input type="submit" name="validate" value="Valider les changements">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h1>Liste du membre exemple 1</h1>
                    <form class="form-notif-achat" action="index.html" method="post">
                      <label for="cadeau1">Cadeau Exemple 1</label>
                      <input type="checkbox" name="cadeau1" value="">
                      <label for="cadeau2">Cadeau Exemple 2</label>
                      <input type="checkbox" name="cadeau2" value="">
                      <label for="cadeau3">Cadeau Exemple 3</label>
                      <input type="checkbox" name="cadeau3" value="">
                      <label for="cadeau4">Cadeau Exemple 4</label>
                      <input type="checkbox" name="cadeau4" value="">
                      <label for="cadeau5">Cadeau Exemple 5</label>
                      <input type="checkbox" name="cadeau5" value="">
                      <input type="submit" name="validate" value="Valider les changements">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h1>Liste du membre exemple 1</h1>
                    <form class="form-notif-achat" action="index.html" method="post">
                      <label for="cadeau1">Cadeau Exemple 1</label>
                      <input type="checkbox" name="cadeau1" value="">
                      <label for="cadeau2">Cadeau Exemple 2</label>
                      <input type="checkbox" name="cadeau2" value="">
                      <label for="cadeau3">Cadeau Exemple 3</label>
                      <input type="checkbox" name="cadeau3" value="">
                      <label for="cadeau4">Cadeau Exemple 4</label>
                      <input type="checkbox" name="cadeau4" value="">
                      <label for="cadeau5">Cadeau Exemple 5</label>
                      <input type="checkbox" name="cadeau5" value="">
                      <input type="submit" name="validate" value="Valider les changements">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">
                        <div class="btn-nouveau-groupe">
                            <img class="plus-icon" src="../ressources/plus-icon.png" alt="">
                            <p>Inviter un membre</p>
                        </div>
                    </a>
                  </td>
                </tr>
              </table>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./js/structureAnimations.js"></script>
</body>
</html>
