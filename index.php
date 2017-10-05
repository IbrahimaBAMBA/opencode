<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OpenCode</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <?php include 'header.php'; ?>
    </header>
    <h2>OpenCode ? Qu'est ce que c'est ?</h2>
    <!--Paragraphe de presentation-->
    <div class="presentation">
      <div class="insert"></div>
      <p>OpenCode est un site dédié à l'apprentissage <b>intensif</b> de differents langages de programmation web.<br/>
        Les exercices sont conçus et mis à disposition par les élèves de la <b>grande</b> et <b>préstigieuse</b> école E2N,<br/>
        <a href="https://www.grandeecolenumerique.fr/">labéllisées Grande Ecole du Numérique</a>
        Et chaque étape franchie vous rapproche un peu plus du monde</br> professionnel, et ce, en à peine une heure!</p>
    </div>
    <h2>Votre réussite Rapidement</h2>
    <!-- Section putaclic -->
      <div id="clickBait">
        <!--Premiere fenetre-->
        <div class="container-img" id="left">
          <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
          <p>Emploi garantie en seulement une heure d'apprentissage !</p>
        </div>
        <!--Deuxieme fenetre-->
        <div class="container-img margin-left" id="right">
          <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
          <p>Plus de cours qu'il n'en faut pour devenir un vrai crack en dévellopement web.</p>
        </div><br/>
        <a class="button" href="Inscription.php">Inscrivez vous</a>
      </div>
      <h2>Exercez vous</h2>
      <!--Section preview-->
      <div id="preview">
        <!--Premiere fenetre-->
        <div class="container-img" id="left">
          <h5>Ligne de commande</h5>
          <i class="fa fa-terminal fa-5x" aria-hidden="true"></i>
          <p class='description'></p>
        </div>
        <!--Seconde fenetre-->
        <div class="container-img margin-left" id="mid">
          <h5>Git</h5>
          <i class="fa fa-git fa-5x" aria-hidden="true"></i>
          <p class='description'></p>
        </div>
        <!--Troisieme fenetre-->
        <div class="container-img margin-left" id="right">
          <h5>Html / Css</h5>
          <i class="fa fa-html5 fa-5x" aria-hidden="true"></i>
          <p class='description'></p>
        </div><br/>
        <a class="button" href="catalogue.php">Tout les cours</a>
      </div>
    <footer>
      <?php include 'footer.php' ?>
    </footer>
<script src="https://use.fontawesome.com/3c12b6c1bd.js"></script>
  </body>
</html>
