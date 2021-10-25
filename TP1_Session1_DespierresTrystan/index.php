<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>

    <link rel="stylesheet" href="css/kickstart.css" media="all" /> <!-- KICKSTART -->
    <meta charset="utf-8">

    <!--Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/kickstart.js"></script>
    <script src="js/index.js"></script>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
  	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/index.css"/>

    <title>Page de connexion</title>
  </head>
  <body>
    <img class="caption" src="img/Logo-P8.png">
    <!--Ajouter index.php dans l'action -->
    <form class="" action="verification.php" method="post">

      <div class="login">
        <label> <b>Identifiant :</b></label>
        <input class="login" type="text" placeholder= "Identifiant (3 caractères min.)"  name="Identifiant" value="" size="30" required>
      </div>

      <div class="password">
        <label><b>Mot de passe :</b></label>
        <input type="password" placeholder="Mot de passe" name="password" value="" required>
      </div>

      <div class="boutons">
        <input type="submit" id="submit" name="submit" value="OK">
        <button class="white" name="resetbtn" onclick="reset()">Reset</button>
        <input type="submit" id="nouveau_compte" name="nouveau_compte" value="Ajouter un compte">
      </div>

    </form>

  </body>
</html>
